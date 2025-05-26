<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Category extends BaseController
{
    public function index($id)
    {
        $sesi = session()->get('user');
        $produk = $this->Base->cekProdukCategory();
        $kategori = $this->Base->cekProdukCategoryById($id);
        $kategori2 = $this->Base->cekCategoryProductTotal();
        if (empty($kategori)) {
            return redirect()->to('/')->with('error', 'Kategori tidak ditemukan.');
        }
        
        $total_wishlist = 0;
        $total_cart = 0;

        $carts = $this->Base->cekCartProduct();
        $total = 0;

        foreach ($carts as $cart) {
            $total += $cart['harga_produk'] * $cart['jumlah'];
        }

        $orders = $this->Base->cekOrdersItemsProducts();

        if ($sesi) {
            $total_wishlist = $this->Base->data_count('wishlists', ['user_id' => $sesi['id']]);
            $total_cart = $this->Base->data_count('cart', ['user_id' => $sesi['id']]);
        }

        $data = [
            'user' => $sesi,
            'produk' => $produk,
            'kategori' => $kategori,
            'total_wishlist' => $total_wishlist,
            'total_cart' => $total_cart,
            'carts' => $carts,
            'total' => $total,
            'orders' => $orders,
            'kategori2' => $kategori2
        ];
        return view("category", $data);
    }
}
