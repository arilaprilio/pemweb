<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        helper("form");
        $sesi = session()->get('user');
        if ($sesi) {
            if ($sesi['hak'] === "Admin") {
                return redirect()->to('/admin');
            } elseif ($sesi['hak'] === "Member") {
                return redirect()->to('/profiles');
            } else {
                return redirect()->back()->with('error', 'Terjadi kesalahan pada server !')->withInput();
            }
        }

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
        return view("auth/login", $data);
    }

    public function login() {
        $sesi = session()->get('user');
        if ($sesi) {
            if ($sesi['hak'] === "Admin") {
                return redirect()->to('/admin');
            } elseif ($sesi['hak'] === "Member") {
                return redirect()->to('/profiles');
            } else {
                return redirect()->back()->with('error', 'Terjadi kesalahan pada server !')->withInput();
            }
        }
    	$email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $kirim = $this->Base->cekLogin($email, $password);
        if (!$kirim) {
            return redirect()->back()->with('error', 'Email atau password anda salah.')->withInput();
        }
        $sesi = [
            'id' => $kirim['id'],
            'email' => $email,
            'nama'  => $kirim['nama'],
            'logged_in' => true,
            'hak' => $kirim['hak']
        ];
        if ($kirim) {
            if ($kirim['status'] === "Off") {
                return redirect()->back()->with('error', 'Akun anda telah dinonaktifkan !')->withInput();
            }
        	session()->set('user', $sesi);
        	if ($sesi['hak'] === "Admin") {
                return redirect()->to('/admin');
            } elseif ($sesi['hak'] === "Member") {
                return redirect()->to('/profiles');
            } else {
                return redirect()->back()->with('error', 'Terjadi kesalahan pada server !')->withInput();
            }
        } else {
        	return redirect()->back()->with('error', 'Email atau password anda salah.')->withInput();
        }
    }
}
