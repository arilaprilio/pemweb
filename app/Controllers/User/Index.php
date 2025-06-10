<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Index extends BaseController
{
    public function index()
    {
    	if (!$this->isLogged()) {
    		return redirect()->to('/auth/login') ->with('error', 'Maaf, anda harus login terlebih dahulu !');
    	}
        helper("form");
        $user = session()->get('user');
        $profile = $this->Base->data_where('user_profiles', "user_id", $user['id']);
        $wishlists = $this->Base->cekWishlistProduct($user['id']);
        $produk = $this->Base->cekProdukCategory();
        $kategori = $this->Base->cekCategoryProductTotal();
        $orders = $this->Base->cekOrdersItemsProducts();
        $carts = $this->Base->cekCartProductById($user['id']);
        $ordernya = $this->Base->cekOrdersCustomer($user['id']);
        $data = [
            'user' => $user,
            'profile' => $profile ? $profile[0] : null,
            'wishlists' => $wishlists,
            'produk' => $produk,
            'kategori' => $kategori,
            'orders' => $orders,
            'carts' => $carts,
            'ordernya' => $ordernya,
        ];
        return view("user/index", $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login')->with('success', 'Anda berhasil logout.');
    }

    public function update()
    {
        if (!$this->isLogged()) {
            return redirect()->to('/auth/login')->with('error', 'Maaf, anda harus login terlebih dahulu !');
        }

        $user = session()->get('user');
        $data = [
            'user_id' => $user['id'],
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('nomor'),
            'facebook' => $this->request->getPost('facebook'),
            'twitter' => $this->request->getPost('twitter'),
            'jenis_kelamin' => $this->request->getPost('gender'),
            'alamat' => $this->request->getPost('alamat'),
        ];

        $cek = $this->Base->data_where('user_profiles', "user_id", $user['id']);

        if ($cek) {
            $this->Base->data_update('user_profiles', $data, $user['id']);
            return redirect()->to('/profiles')->with('success', 'Profil berhasil diperbarui.');
        } else {
            $this->Base->data_insert('user_profiles', $data);
            return redirect()->to('/profiles')->with('success', 'Profil berhasil disimpan.');
        }
    }

    public function password()
    {
        if (!$this->isLogged()) {
            return redirect()->to('/auth/login')->with('error', 'Maaf, anda harus login terlebih dahulu !');
        }

        $user = session()->get('user');
        $oldPass = $this->request->getPost('old_pass');
        $newPass = $this->request->getPost('new_pass');
        $confirmPass = $this->request->getPost('con_new_pass');

        if (empty($oldPass) || empty($newPass) || empty($confirmPass)) {
            return redirect()->back()->with('error', 'Semua field harus diisi.');
        }

        if ($newPass !== $confirmPass) {
            return redirect()->back()->with('error', 'Konfirmasi password tidak cocok.');
        }

        $userData = $this->Base->data_where('users', 'id', $user['id']);
        if (!$userData || !password_verify($oldPass, $userData[0]['password'])) {
            return redirect()->back()->with('error', 'Password lama salah.');
         }

         $hashedPassword = password_hash($newPass, PASSWORD_DEFAULT);
        $this->Base->data_update('users', ['password' => $hashedPassword], $user['id']);

        return redirect()->to('/profiles')->with('success', 'Password berhasil diperbarui.');
    }

    public function pesanan($id = null)
    {
        if (!$this->isLogged()) {
            return redirect()->to('/auth/login')->with('error', 'Maaf, anda harus login terlebih dahulu !');
        }

        if ($id === null) {
            return redirect()->to('/profiles')->with('error', 'ID Pesanan tidak ditemukan.');
        }

        $order = $this->Base->cekOrdersItemsProductsById($id);
        if (!$order) {
            return redirect()->to('/profiles')->with('error', 'Pesanan tidak ditemukan.');
        }

        $user = session()->get('user');
        $profile = $this->Base->data_where('user_profiles', "user_id", $user['id']);
        $wishlists = $this->Base->cekWishlistProduct($user['id']);
        $produk = $this->Base->cekProdukCategory();
        $kategori = $this->Base->cekCategoryProductTotal();
        $orders = $this->Base->cekOrdersItemsProducts();
        $carts = $this->Base->cekCartProductById($user['id']);
        $data = [
            'user' => $user,
            'profile' => $profile ? $profile[0] : null,
            'wishlists' => $wishlists,
            'produk' => $produk,
            'kategori' => $kategori,
            'orders' => $orders,
            'carts' => $carts,
            'ordernya' => $order,
        ];

        return view('order', $data);
    }
}
