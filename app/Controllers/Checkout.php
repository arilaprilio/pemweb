<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Checkout extends BaseController
{
    public function index()
  {
    if (!session()->get('user')) {
        return redirect()->to('/auth/login')->with('error', 'Anda harus login terlebih dahulu');
    }
    helper("form");
    $userId = session()->get('user')['id'];
    $data['addresses'] = $this->Base->data_where('user_addresses','user_id', $userId);

    $pid = $this->request->getGet('pid');
    $qty = $this->request->getGet('qty') ?: 1;

    $wishlists = $this->Base->cekWishlistProduct($userId);
    $produk = $this->Base->cekProdukCategory();
    $kategori = $this->Base->cekCategoryProductTotal();
    $orders = $this->Base->cekOrdersItemsProducts();
    $carts = $this->Base->cekCartProductById($userId);

    $data['wishlists'] = $wishlists;
    $data['produk'] = $produk;
    $data['kategori'] = $kategori;
    $data['orders'] = $orders;
    $data['carts'] = $carts;

    if ($pid && is_numeric($pid)) {
      $prod = $this->Base->data_where('product', 'id', $pid);
      if (empty($prod)) {
        return redirect()->back()->with('error', 'Produk tidak ditemukan');        
      }
      $p = $prod[0];
      $data['items'] = [[
        'produk_id' => $p['id'],
        'nama' => $p['nama'],
        'qty' => $qty,
        'price' => $p['harga'],
        'stok' => $p['stok']
      ]];
      $data['is_single'] = true;
    } else {
      $cart = $this->Base->data_where('cart','user_id',$userId);
      $items = [];
      foreach ($cart as $c) {
        $p = $this->Base->data_where('product','id',$c['produk_id'])[0];
        $items[] = [
          'produk_id'=> $p['id'],
          'nama' => $p['nama'],
          'qty' => $c['jumlah'],
          'price' => $p['harga'],
          'stok' => $p['stok']
        ];
      }
      $data['items'] = $items;
      $data['is_single'] = false;
    }

    return view('checkout', $data);
  }

public function process()
{
    $post   = $this->request->getPost();
    $userId = session()->get('user')['id'];
    if (!$userId) {
        return redirect()->back()->with('error', 'Anda harus login terlebih dahulu');
    }

    $this->db = \Config\Database::connect();

    $addressData = [
        'user_id' => $userId,
        'nama_depan' => $post['nama1'],
        'nama_belakang' => $post['nama2'],
        'alamat1' => $post['alamat1'],
        'alamat2' => $post['alamat2'],
        'kota' => $post['kota'],
        'kodepos' => $post['kodepos'],
        'nohp' => $post['nohp'],
        'email' => $post['email'],
    ];
    $cek = $this->Base->data_where('user_addresses', 'user_id', $userId);
    if (!empty($cek)) {
        $addressId = $cek[0]['id'];
        $this->Base->data_update('user_addresses', $addressData, $addressId);
    } else {
        $this->Base->data_insert('user_addresses', $addressData);
        $addressId = $this->Base->data_where('user_addresses', 'user_id', $userId);
        $addressId = $addressId[0]['id'];
    }

    if (isset($post['product_id'], $post['qty']) && is_numeric($post['product_id']) && is_numeric($post['qty'])) {
        $prod = $this->Base->data_where('product', 'id', $post['product_id']);
        if (empty($prod)) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan');
        }
        $p = $prod[0];
        $items = [[
            'produk_id' => $p['id'],
            'nama'      => $p['nama'],
            'jumlah'    => $post['qty'],
            'price'     => $p['harga'],
            'stok'      => $p['stok']
        ]];
    } else {
        $cart = $this->Base->data_where('cart', 'user_id', $userId);
        if (empty($cart)) {
            return redirect()->back()->with('error', 'Keranjang belanja Anda kosong');
        }

        $items = [];
        foreach ($cart as $c) {
            $prod = $this->Base->data_where('product', 'id', $c['produk_id']);
            if (!empty($prod)) {
                $p = $prod[0];
                $items[] = [
                    'produk_id' => $p['id'],
                    'nama'      => $p['nama'],
                    'jumlah'    => $c['jumlah'],
                    'price'     => $p['harga'],
                    'stok'      => $p['stok']
                ];
            }
        }
    }

    $total = array_reduce($items, function($sum, $it) {
        return $sum + ($it['price'] * $it['jumlah']);
    }, 0);

    $this->db->transStart();
    $this->Base->data_insert('orders', [
        'user_id'    => $userId,
        'address_id' => $addressId,
        'total'      => $total,
        'status'     => 'pending',
    ]);
    $orderId = $this->db->insertID();

    foreach ($items as $it) {
        $this->Base->data_update('product', ['stok' => $it['stok'] - $it['jumlah']], $it['produk_id']);
        $this->Base->data_insert('order_items', [
            'order_id'  => $orderId,
            'produk_id' => $it['produk_id'],
            'jumlah'    => $it['jumlah'],
            'harga'     => $it['price'],
        ]);
    }

    if (!isset($post['product_id']) && !isset($post['qty'])) {
        $this->db->table('cart')->where('user_id', $userId)->delete();
    }

    $this->db->transComplete();

    return redirect()->to("/")->with('success', 'Pesanan Anda telah diproses.');
}
}
