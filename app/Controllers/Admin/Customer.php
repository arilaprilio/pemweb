<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Customer extends BaseController
{
	
    public function index()
    {
		$sesi = session()->get('user');
        if (!$sesi || $sesi['hak'] !== "Admin") {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini');
        }

    	helper("form");
    	$datauser = $this->Base->all_data("users");
        $admin = session()->get('user');
    	$data = [
    		'users' => $datauser,
            'admin' => $admin
    	];
        return view("admin/customer", $data);
    }

    public function edit()
    {
		$sesi = session()->get('user');
        if (!$sesi || $sesi['hak'] !== "Admin") {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini');
        }

    	$name = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $status = $this->request->getPost('status');
        $id = $this->request->getPost('id_customer');
    	if (empty($name)) {
    		return redirect()->back()->with('error', 'Nama tidak boleh kosong !');
    	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    		return redirect()->back()->with('error', 'Email tidak boleh kosong !');
    	} elseif (!in_array($status, ["On", "Off"], true)) {
    		return redirect()->back()->with('error', 'Mohon isi dengan benar !');
    	} elseif (!is_numeric($id)) {
    		return redirect()->back()->with('error', 'Mohon isi dengan benar !');
    	}
    	$data = [
    		"nama" => $name,
    		"email" => $email,
    		"status" => $status
    	];
    	$update = $this->Base->data_update("users", $data, $id);
    	if ($update) {
    		return redirect()->to('/admin/customer')->with('success', 'Berhasil memperbarui user dengan ID '.$id.'!');
    	} else {
    		return redirect()->back()->with('error', 'Terjadi kesalahan pada server !');
    	}
    }

    public function delete()
    {
		$sesi = session()->get('user');
        if (!$sesi || $sesi['hak'] !== "Admin") {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini');
        }
		
        $id = $this->request->getPost('id_customer');
    	$delete = $this->Base->data_delete("users", $id);
    	if ($delete) {
    		return redirect()->to('/admin/customer')->with('success', 'Berhasil menghapus user dengan ID '.$id.'!');
    	} else {
    		return redirect()->back()->with('error', 'Terjadi kesalahan pada server !');
    	}
    }
}
