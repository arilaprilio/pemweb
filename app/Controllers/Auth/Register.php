<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Register extends BaseController
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
        return view("auth/register");
    }

    public function register() {
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
    	$name = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $syarat = $this->request->getPost('syarat');
        $waktu = date('Y-m-d H:i');
        if (strlen($password) < 6) {
            return redirect()->back()->with('error', 'Password minimal 6 karakter');
        }
        if (empty($syarat)) {
        	return redirect()->back()->with('error', 'Mohon setujui layanan & kebijakan privasi.');
        }
        $cekemail = $this->Base->data_where("users", "email", $email);
        if (!empty($cekemail[0])) {
            return redirect()->back()->with('error', 'Email sudah digunakan !');
        }
        $data = [
        	'email' => $email,
        	'nama' => $name,
        	'password' => password_hash($password, PASSWORD_DEFAULT),
        	'status' => "On",
            'hak' => "Member",
        	'added_on' => $waktu,
        	'updated_on' => $waktu
        ];
        $kirim = $this->Base->data_insert("users", $data);
        if ($kirim) {
        	return redirect()->to('/auth/login') ->with('success', 'Registrasi berhasil !');
        } else {
        	return redirect()->back()->with('error', 'Gagal menyimpan data. Mohon coba lagi.')->withInput();
        }
    }
}
