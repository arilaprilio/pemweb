<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Index extends BaseController
{
    public function addCart()
    {
        if (!session()->get('user')) {
            return $this->response->setStatusCode(401)->setJSON(['error'=>'Anda harus login terlebih dahulu']);
        }

        $user = session()->get('user')['id'];
        $input = $this->request->getJSON(true);
        $produk = $input['product_id'] ?? null;
        $total = $input['qty'] ?? 1;

        $cek = $this->Base->data_where_array('cart', [
          'user_id'    => $user,
          'produk_id' => $produk
        ]);
        if (count($cek)) {
            $row = $cek[0];
            $this->Base->data_update('cart', ['jumlah' => $row['jumlah'] + $total], $row['id']);
        } else {
            $this->Base->data_insert('cart', [
              'user_id'    => $user,
              'produk_id' => $produk,
              'jumlah'   => $total
            ]);
        }

        return $this->response->setJSON(['success'=>true]);
    }

    public function addWishlist()
    {
        if (!session()->get('user')) {
            return $this->response->setStatusCode(401)->setJSON(['error'=>'Anda harus login terlebih dahulu']);
        }

        $user = session()->get('user')['id'];
        $input = $this->request->getJSON(true);
        $produk = $input['product_id'] ?? null;

        $cek = $this->Base->data_where_array('wishlists', [
          'user_id'    => $user,
          'product_id' => $produk
        ]);
        if (!count($cek)) {
            $this->Base->data_insert('wishlists', [
              'user_id'    => $user,
              'product_id' => $produk
            ]);
        }

        return $this->response->setJSON(['success'=>true]);
    }

    public function buyNow()
    {
        $input = $this->request->getJSON(true);
        $user = session()->get('user');
        if (!$user) {
            return $this->response->setStatusCode(401)->setJSON(['error'=>'Anda harus login terlebih dahulu']);
        }

        $pid = (int) ($input['product_id'] ?? 0);
        $qty = max(1, (int) ($input['qty'] ?? 1));

        if (!$pid) {
            return $this->response->setStatusCode(400)->setJSON(['error' => 'Produk tidak valid']);
        }

        $prod = $this->Base->data_where('product', 'id', $pid);
        if (empty($prod)) {
            return $this->response->setStatusCode(404)->setJSON(['error' => 'Produk tidak ditemukan']);
        }
        $prod = $prod[0];
        if ($prod['stok'] < $qty) {
            return $this->response->setStatusCode(409)->setJSON(['error' => 'Stok tidak mencukupi']);
        }

        $db = \Config\Database::connect();
        $db->transStart();

        $newStok = $prod['stok'] - $qty;
        $this->Base->data_update('product', ['stok' => $newStok], $pid);

        $total = $prod['harga'] * $qty;
        $orderId = $db->table('orders')
                      ->insert([
                        'user_id'=> $user['id'],
                        'total'  => $total,
                        'status' => 'pending',
                        'created_at'=> date('Y-m-d H:i:s'),
                      ]);
        $orderId = $db->insertID();

        $this->Base->data_insert('order_items', [
            'order_id'  => $orderId,
            'produk_id' => $pid,
            'jumlah'    => $qty,
            'harga'     => $prod['harga'],
        ]);

        $db->transComplete();

        if ($db->transStatus() === false) {
            return $this->response
                        ->setStatusCode(500)
                        ->setJSON(['error'=>'Gagal membuat order']);
        }

        return $this->response
                    ->setStatusCode(200)
                    ->setJSON(['order_id'=>$orderId]);
    }

    public function updateCart()
    {
        if (!session()->get('user')) {
            return $this->response->setStatusCode(401)->setJSON(['error' => 'Anda harus login terlebih dahulu']);
        }

        $user = session()->get('user')['id'];
        $input = $this->request->getJSON(true);
        $cartIds = $input['product_id'] ?? [];
        $qtys = $input['qty'] ?? [];

        if (!is_array($cartIds) || !is_array($qtys) || count($cartIds) !== count($qtys) ) {
            return $this->response->setStatusCode(400)->setJSON(['error' => 'Input tidak valid']);
        }

        $db = \Config\Database::connect();
        $db->transStart();
        foreach ($cartIds as $i => $cartId) {
            $q = max(1, $qtys[$i]);
            $this->Base->data_update('cart', [
                'jumlah' => $q
            ], $cartId);
        }
        $db->transComplete();

        if (!$db->transStatus()) {
            return $this->response->setStatusCode(500)->setJSON(['error' => 'Gagal memperbarui keranjang']);
        }

        $items = $this->Base->cekCartProduct($user);
        $grand = array_reduce($items, function ($sum, $it) {
            return $sum + ($it['harga_produk'] * $it['jumlah']);
        }, 0);

        return $this->response->setJSON([
            'items' => $items,
            'grand_total' => $grand
        ]);
    }
}
