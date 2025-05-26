<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $sesi = session()->get('user');
        $produk = $this->Base->cekProdukCategory();
        $kategori = $this->Base->cekCategoryProductTotal();
        $banner = $this->Base->cekBannerProduct();
        
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
            'banner' => $banner,
        ];
        return view('home', $data);
    }
}
