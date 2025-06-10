<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Product extends BaseController
{
    public function index($id)
    {
        $productnya = $this->Base->cekSatuProdukCategory($id);
        if (empty($productnya)) {
            return redirect()->to('/')->with('error', 'Produk tidak ditemukan');
        }
        $sesi = session()->get('user');
        if ($sesi) {
            $total_wishlist = $this->Base->data_count('wishlists', ['user_id' => $sesi['id']]);
            $total_cart = $this->Base->data_count('cart', ['user_id' => $sesi['id']]);
        }

        $product_kategori_sama = $this->Base->data_where("product", "kategori", $productnya[0]['kategori']);
        $produk = $this->Base->cekProdukCategory();
        $kategori = $this->Base->cekCategoryProductTotal();
        $orders = $this->Base->cekOrdersItemsProducts();
        $data = [
            'product' => $productnya[0],
            'products' => $product_kategori_sama,
            'total_wishlist' => $total_wishlist ?? 0,
            'produk' => $produk,
            'kategori' => $kategori,
            'orders' => $orders,
            'total_cart' => $total_cart ?? 0,
            
        ];
        return view("product-detail", $data);
    }
}
