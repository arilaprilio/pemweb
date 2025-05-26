<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Cart extends BaseController
{
    public function index()
    {
        $id = session()->get('user')['id'] ?? null;
        if (!$id) {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login terlebih dahulu.');
        }
        $wishlists = $this->Base->cekWishlistProduct($id);
        $produk = $this->Base->cekProdukCategory();
        $kategori = $this->Base->cekCategoryProductTotal();
        $orders = $this->Base->cekOrdersItemsProducts();
        $carts = $this->Base->cekCartProductById($id);
        $total = 0;

        foreach ($carts as $cart) {
            $total += $cart['harga_produk'] * $cart['jumlah'];
        }

        $data = [
            'carts' => $carts,
            'total' => $total,
            'produk' => $produk,
            'orders' => $orders,
            'kategori' => $kategori,
            'wishlists' => $wishlists,
        ];
        return view("cart", $data);
    }

    public function hapus() {
        $id = session()->get('user')['id'] ?? null;
        if (!$id) {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login terlebih dahulu.');
        }
        $idProd = $this->request->getGet('id');
        if (!$idProd) {
            return redirect()->back()->with('error', 'ID tidak ditemukan.');
        }
        $this->Base->data_delete('cart', $idProd);
        return redirect()->back()->with('success', 'Produk berhasil dihapus dari keranjang.');
    }
}
