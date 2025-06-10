<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Wishlist extends BaseController
{
    public function index()
    {
        $sesi = session()->get('user');
        if (empty($sesi)) {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login terlebih dahulu.');
        }
        $wishlists = $this->Base->cekWishlistProduct($sesi['id']);
        $produk = $this->Base->cekProdukCategory();
        $kategori = $this->Base->cekCategoryProductTotal();
        $orders = $this->Base->cekOrdersItemsProducts();
        $carts = $this->Base->cekCartProductById($sesi['id']);
        $data = [
            'user' => $sesi,
            'wishlists' => $wishlists,
            'produk' => $produk,
            'kategori' => $kategori,
            'orders' => $orders,
            'carts' => $carts
        ];
        return view("wishlist", $data);
    }

    public function delete()
    {
        $sesi = session()->get('user');
        if (empty($sesi)) {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        $id = $this->request->getGet('id');
        if (empty($id)) {
            return redirect()->to('/wishlist')->with('error', 'ID wishlist tidak ditemukan.');
        }

        $wishlist = $this->Base->data_where_array("wishlists", ['id' => $id, 'user_id' => $sesi['id']]);
        if (empty($wishlist)) {
            return redirect()->to('/wishlist')->with('error', 'Wishlist tidak valid atau tidak dimiliki oleh Anda.');
        }

        $this->Base->data_delete("wishlists", $id);
        return redirect()->to('/wishlist')->with('success', 'Wishlist dengan ID '.$id.' berhasil dihapus.');
    }

    public function tambah() {
        $sesi = session()->get('user');
        if (empty($sesi)) {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        $id = $this->request->getGet('id');
        if (empty($id)) {
            return redirect()->to('/wishlist')->with('error', 'ID wishlist tidak ditemukan.');
        }

        $wishlist = $this->Base->data_where_array("wishlists", ['id' => $id, 'user_id' => $sesi['id']]);
        if (empty($wishlist)) {
            return redirect()->to('/wishlist')->with('error', 'Wishlist tidak valid atau tidak dimiliki oleh Anda.');
        }

        $data = [
            'user_id' => $sesi['id'],
            'produk_id' => $wishlist[0]['product_id'],
            'jumlah' => 1
        ];
        $this->Base->data_insert("cart", $data);
        $this->Base->data_delete("wishlists", $id);

        return redirect()->to('/wishlist')->with('success', 'Wishlist dengan ID '.$id.' berhasil ditambahkan ke keranjang.');
    }
}
