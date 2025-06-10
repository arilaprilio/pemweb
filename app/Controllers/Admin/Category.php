<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Category extends BaseController
{
    public function index()
    {
        $sesi = session()->get('user');
        if (!$sesi || $sesi['hak'] !== "Admin") {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini');
        }

    	helper("form");
    	$kategori = $this->Base->all_data("category");
        $produk = $this->Base->cekProdukCategory();
    	$data = [
    		"kategori" => array_reverse($kategori),
            "produk" => array_reverse($produk),
            "admin" => session()->get('user'),
    	];
        return view("admin/category", $data);
    }

    public function produk_tambah()
    {
        $sesi = session()->get('user');
        if (!$sesi || $sesi['hak'] !== "Admin") {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini');
        }

    	$nama = $this->request->getPost('nama_produk');
        $harga = $this->request->getPost('harga_produk');
        $kategori = $this->request->getPost('kategori_produk');
        $file = $this->request->getFile('foto_produk');
        $stok = $this->request->getPost('stok_produk');
        $desc = $this->request->getPost('deskripsi_produk');
        if (empty($nama) || empty($harga) || empty($kategori)) {
            return redirect()->back()->with('error', 'Semua field harus diisi');
        }
        if (!is_numeric($harga)) {
            return redirect()->back()->with('error', 'Harga harus berupa angka');
        }
        if (!is_numeric($kategori)) {
            return redirect()->back()->with('error', 'Kategori harus berupa angka');
        }
        if (!is_numeric($stok)) {
            return redirect()->back()->with('error', 'Stok harus berupa angka');
        }
        if ($file->isValid() && in_array(strtolower($file->getClientExtension()), ['jpg', 'jpeg', 'png', 'gif'])) {
            $namaFile = $file->getRandomName();
            $file->move(FCPATH  . 'assets/images/produk', $namaFile);
        } else {
            return redirect()->back()->with('error', 'Gambar tidak valid');
        }
        $data = [
            'nama' => $nama,
            'harga' => $harga,
            'kategori' => $kategori,
            'stok' => $stok,
            'foto' => "assets/images/produk/" . $namaFile,
            'deskripsi' => $desc
        ];
        $tambah = $this->Base->data_insert("product", $data);
        if ($tambah) {
            return redirect()->to('/admin/category')->with('success', 'Produk berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan produk');
        }
    }

    public function produk_edit()
    {
        $sesi = session()->get('user');
        if (!$sesi || $sesi['hak'] !== "Admin") {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini');
        }

    	$nama = $this->request->getPost('produk_nama');
        $harga = $this->request->getPost('produk_harga');
        $kategori = $this->request->getPost('produk_kategori');
        $file = $this->request->getFile('produk_foto');
        $stok = $this->request->getPost('produk_stok');
        $id = $this->request->getPost('produk_id');
        $desc = $this->request->getPost('produk_deskripsi');
        if (empty($nama) || empty($harga) || empty($kategori)) {
            return redirect()->back()->with('error', 'Semua field harus diisi');
        }
        if (!is_numeric($harga)) {
            return redirect()->back()->with('error', 'Harga harus berupa angka');
        }
        if (!is_numeric($kategori)) {
            return redirect()->back()->with('error', 'Kategori harus berupa angka');
        }
        if (!is_numeric($stok)) {
            return redirect()->back()->with('error', 'Stok harus berupa angka');
        }
        if (!is_numeric($id)) {
            return redirect()->back()->with('error', 'ID produk tidak valid');
        }
        if (!empty($file) && $file->isValid() && !$file->hasMoved() && in_array(strtolower($file->getClientExtension()), ['jpg', 'jpeg', 'png', 'gif'])) {
            $namaFile = $file->getRandomName();
            $file->move(FCPATH  . 'assets/images/produk', $namaFile);
            $data = [
                'nama' => $nama,
                'harga' => $harga,
                'kategori' => $kategori,
                'stok' => $stok,
                'deskripsi' => $desc,
                'foto' => "assets/images/produk/" . $namaFile
            ];
        } else {
            $data = [
                'nama' => $nama,
                'harga' => $harga,
                'kategori' => $kategori,
                'stok' => $stok,
                'deskripsi' => $desc
            ];
        }
        $update = $this->Base->data_update("product", $data, $id);
        if ($update) {
            return redirect()->to('/admin/category')->with('success', 'Produk dengan ID '.$id.' berhasil diperbarui');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui produk');
        }
    }

    public function produk_delete()
    {
        $sesi = session()->get('user');
        if (!$sesi || $sesi['hak'] !== "Admin") {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini');
        }

        $id = $this->request->getPost('produk_id');
        if (!is_numeric($id)) {
            return redirect()->back()->with('error', 'Mohon perbaiki inputan anda');
        }
        $hapus = $this->Base->data_delete("product", $id);
        if ($hapus) {
            $produk = $this->Base->data_where("product", "id", $id);
            if (!empty($produk) && file_exists(FCPATH . $produk[0]['foto'])) {
                unlink(FCPATH . $produk[0]['foto']);
            }
            return redirect()->to('/admin/category')->with('success', 'Produk dengan ID '.$id.' berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus produk');
        }
    }

    public function kategori_tambah()
    {
        $sesi = session()->get('user');
        if (!$sesi || $sesi['hak'] !== "Admin") {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini');
        }

    	$nama = $this->request->getPost('nama_kategori');
        if (empty($nama)) {
            return redirect()->back()->with('error', 'Mohon nama kategori diisi');
        }
        $data = [
            'nama' => $nama
        ];
        $tambah = $this->Base->data_insert("category", $data);
        if ($tambah) {
            return redirect()->to('/admin/category')->with('success', 'Kategori berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan kategori');
        }
    }

    public function kategori_edit()
    {
        $sesi = session()->get('user');
        if (!$sesi || $sesi['hak'] !== "Admin") {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini');
        }

        $id = $this->request->getPost('kategori_id');
    	$nama = $this->request->getPost('kategori_nama');
        if (empty($nama)) {
            return redirect()->back()->with('error', 'Mohon nama kategori diisi');
        }
        if (!is_numeric($id)) {
            return redirect()->back()->with('error', 'Mohon perbaiki inputan anda');
        }
        $data = [
            'nama' => $nama
        ];
        $perbarui = $this->Base->data_update("category", $data, $id);
        if ($perbarui) {
            return redirect()->to('/admin/category')->with('success', 'Kategori dengan ID '.$id.' berhasil diperbarui');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui kategori');
        }
    }

    public function kategori_delete()
    {
        $sesi = session()->get('user');
        if (!$sesi || $sesi['hak'] !== "Admin") {
            return redirect()->to('/auth/login')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini');
        }
        
        $id = $this->request->getPost('kategori_id');
        if (!is_numeric($id)) {
            return redirect()->back()->with('error', 'Mohon perbaiki inputan anda');
        }
        $hapus = $this->Base->data_delete("category", $id);
        if ($hapus) {
            return redirect()->to('/admin/category')->with('success', 'Kategori dengan ID '.$id.' berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus kategori');
        }
    }
}
