<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    
    public function index()
    {
        $sesi = session()->get('user');
        if (!$sesi || $sesi['hak'] !== "Admin") {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini');
        }

    	$infoadmin = session()->get('user');
    	if (!empty($infoadmin) && $infoadmin['hak'] !== "Admin") {
    		return redirect()->to('/auth/login') ->with('error', 'Maaf, anda harus login terlebih dahulu !');
    	}
        $produk = $this->Base->cekProdukCategory();
        usort($produk, function($a, $b) {
            return $a['stok'] <=> $b['stok'];
        });
        $order = $this->Base->cekOrdersItemsProducts("orders");
        $customer = $this->Base->all_data('users');
        $pendapatan = $this->Base->jumlah('orders', 'total'); 
        $data = [
            "admin" => $infoadmin,
            "produk" => $produk,
            "orders" => $order,
            "customer" => $customer,
            "pendapatan" => $pendapatan,
        ];
        return view("admin/dashboard", $data);
    }

    public function logout()
    {
        $sesi = session()->get('user');
        if (!$sesi) {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini');
        }
        
        session()->destroy();
        return redirect()->to('/auth/login')->with('success', 'Berhasil logout.');
    }
}
