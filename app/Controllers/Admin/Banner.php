<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Banner extends BaseController
{
    public function index()
    {
        $sesi = session()->get('user');
        if (!$sesi || $sesi['hak'] !== "Admin") {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini');
        }
        helper("form");
        $banners = $this->Base->all_data("banner");
        $produk = $this->Base->all_data("product");
        $data = [
            "banners" => array_reverse($banners),
            "admin" => session()->get('user'),
            "produk" => array_reverse($produk),
        ];
        return view("admin/banner", $data);
    }

    public function update()
    {
        $sesi = session()->get('user');
        if (!$sesi || $sesi['hak'] !== "Admin") {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini');
        }

        $produk1 = $this->request->getPost('produk1');
        $produk2 = $this->request->getPost('produk2');
        $produk3 = $this->request->getPost('produk3');
        $produk4 = $this->request->getPost('produk4');
        $produk5 = $this->request->getPost('produk5');
        $produk6 = $this->request->getPost('produk6');

        $produk1 = ($produk1 == 99 || !$produk1) ? 0 : $produk1;
        $produk2 = ($produk2 == 99 || !$produk2) ? 0 : $produk2;
        $produk3 = ($produk3 == 99 || !$produk3) ? 0 : $produk3;
        $produk4 = ($produk4 == 99 || !$produk4) ? 0 : $produk4;
        $produk5 = ($produk5 == 99 || !$produk5) ? 0 : $produk5;
        $produk6 = ($produk6 == 99 || !$produk6) ? 0 : $produk6;

        $this->Base->data_update("banner", ["produk_id" => $produk1], 1);
        $this->Base->data_update("banner", ["produk_id" => $produk2], 2);
        $this->Base->data_update("banner", ["produk_id" => $produk3], 3);
        $this->Base->data_update("banner", ["produk_id" => $produk4], 4);
        $this->Base->data_update("banner", ["produk_id" => $produk5], 5);
        $this->Base->data_update("banner", ["produk_id" => $produk6], 6);

        return redirect()->back()->with('success', 'Banner berhasil diperbarui');
    }
}
