<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
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
    	helper("form");
        return view("auth/login");
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
