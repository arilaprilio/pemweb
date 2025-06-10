<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Shipping extends BaseController
{
    public function index()
    {
        $order = $this->Base->cekOrdersItemsProducts("orders");
        $data = [
            'order' => $order,
        ];
        return view('admin/shipping', $data);
    }

    public function detail($id = null)
    {
        if ($id === null) {
            return redirect()->to(site_url('admin/shipping'))->with('error', 'Shipping ID dibutuhkan.');
        }
        $cek = $this->Base->cekOrdersItemsProductsById($id);
        if (!$cek) {
            return redirect()->to(site_url('admin/shipping'))->with('error', 'Shipping tidak ditemukan.');
        }

        $data = [
            'order' => $cek,
        ];
        return view('admin/shipping-detail', $data);
    }
}
