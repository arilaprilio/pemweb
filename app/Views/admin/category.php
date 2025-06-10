<!doctype html>
<html lang="en">
<head>
        
        <meta charset="utf-8" />
        <title>Beli.in Admin - Customer Management</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <link rel="shortcut icon" href="<?=site_url()?>assets/img/logo/favicon.png">
        <link href="<?=site_url()?>assets/admin/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
        <script src="<?=site_url()?>assets/admin/js/layout.js"></script>
        <link href="<?=site_url()?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="<?=site_url()?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=site_url()?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?=site_url()?>assets/admin/css/modal.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body data-sidebar="light">

        <!-- Begin page -->
        <div id="layout-wrapper">        
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                          <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="<?=site_url()?>" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?=site_url()?>assets/img/logo/logo.svg" alt="logo-sm-dark" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?=site_url()?>assets/img/logo/logo.svg" alt="logo-dark" height="25">
                                </span>
                            </a>

                            <a href="<?=site_url()?>" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?=site_url()?>assets/img/logo/logo.svg" alt="logo-sm-light" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?=site_url()?>assets/img/logo/logo.svg" alt="logo-light" height="25">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>
            
                      <!-- start page title -->
                      <div class="page-title-box align-self-center d-none d-md-block">
                        <h4 class="page-title mb-0">Kelola Produk & Kategori</h4>
                      </div>
                      <!-- end page title -->
                    </div>

                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                 <!-- LOGO -->
                 <div class="navbar-brand-box">
                    <a href="<?=site_url()?>" class="logo logo-dark">
                        <span class="logo-lg">
                            <img src="<?=site_url()?>assets/img/logo/logo.svg" alt="logo-dark" height="50">
                        </span>
                    </a>

                    <a href="<?=site_url()?>" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm-light.png" alt="logo-sm-light" height="24">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="logo-light" height="22">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn" id="vertical-menu-btn">
                    <i class="ri-menu-2-line align-middle"></i>
                </button>

                <div data-simplebar class="vertical-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="/admin/dashboard" class="waves-effect">
                                    <i class="uim uim-airplay"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                           <li>
                                <a href="/admin/customer" class="waves-effect">
                                    <i class="uim uim-airplay"></i>
                                    <span>Pengguna</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/category" class="waves-effect">
                                    <i class="uim uim-airplay"></i>
                                    <span>Produk</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/banner" class="waves-effect">
                                    <i class="uim uim-airplay"></i>
                                    <span>Banner</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/shipping" class="waves-effect">
                                    <i class="uim uim-airplay"></i>
                                    <span>Shipping</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->
                </div>

                <div class="dropdown px-3 sidebar-user sidebar-user-info">
                    <button type="button" class="btn w-100 px-0 border-0" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                    <img src="<?=site_url()?>assets/admin/images/users/avatar-2.jpg" class="img-fluid header-profile-user rounded-circle" alt="">
                            </div>

                            <div class="flex-grow-1 ms-2 text-start">
                                <span class="ms-1 fw-medium user-name-text"><?=$admin['nama']?></span>
                            </div>

                            <div class="flex-shrink-0 text-end">
                                <i class="mdi mdi-dots-vertical font-size-16"></i>
                            </div>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="/admin/logout"><i class="mdi text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
                    </div>
                </div>

            </div>
            <!-- Left Sidebar End -->

            


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs mb-3" id="kelolaTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="kategori-tab" data-bs-toggle="tab" data-bs-target="#kategori" type="button" role="tab" aria-controls="kategori" aria-selected="true">
                            Kelola Kategori
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="produk-tab" data-bs-toggle="tab" data-bs-target="#produk" type="button" role="tab" aria-controls="produk" aria-selected="false">
                            Kelola Produk
                            </button>
                        </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content" id="kelolaTabContent">

                        <!-- Tab Kategori -->
                        <div class="tab-pane fade show active" id="kategori" role="tabpanel" aria-labelledby="kategori-tab">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-between align-items-center">
                                Daftar Kategori
                                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#kategoriModalTambah">Tambah Kategori</button>
                                </h5>
                                <table class="table table-striped table-bordered">
                                <thead class="table-light">
                                    <tr>
                                    <th>ID</th>
                                    <th>Nama Kategori</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($kategori as $kat) {
                                    ?>
                                    <tr>
                                    <td><?=esc($kat['id'])?></td>
                                    <td><?=esc($kat['nama'])?></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kategoriModalEdit" data-id="1" data-nama="Elektronik">Edit</button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#kategoriModalDelete" data-id="1" data-nama="Elektronik">Hapus</button>
                                    </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>

                        <!-- Tab Produk -->
                        <div class="tab-pane fade" id="produk" role="tabpanel" aria-labelledby="produk-tab">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-between align-items-center">
                                Daftar Produk
                                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#produkModalTambah">Tambah Produk</button>
                                </h5>
                                <table class="table table-striped table-bordered">
                                <thead class="table-light">
                                    <tr>
                                    <th>ID</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($produk as $prod) {
                                    ?>
                                    <tr>
                                    <td><?=$prod['id']?></td>
                                    <td><?=esc($prod['nama'])?></td>
                                    <td><?=esc($prod['nama_kategori'])?></td>
                                    <td>Rp <?=number_format($prod['harga'],0,',','.')?></td>
                                    <td><?=$prod['stok']?></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#produkModalEdit"
                                        data-id="<?=$prod['id']?>" data-nama="<?=esc($prod['nama'])?>" data-kategori="<?=esc($prod['kategori'])?>" data-harga="<?=$prod['harga']?>" data-stok="<?=$prod['stok']?>" data-deskripsi="<?=$prod['deskripsi']?>">Edit</button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#produkModalDelete" data-id="<?=$prod['id']?>" data-nama="<?=esc($prod['nama'])?>">Hapus</button>
                                    </td>
                                    </tr>
                                    <p style="display: none" id="produkDeskripsi">asd</p>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
                    </form>
                </div>
                </div>


                <div class="modal fade" id="editKategoriModal" tabindex="-1" aria-labelledby="editKategoriLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <?=form_open("admin/category/edit")?>
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="editKategoriLabel">Edit Kategori</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                            <input type="hidden" id="editKategoriId" name="kategori_id" />
                            <div class="mb-3">
                                <label for="editKategoriNama" class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control" id="editKategoriNama" name="kategori_nama" required />
                            </div>
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            </div>
                        </div>
                        <?=form_close()?>
                    </div>
                    </div>

                <div class="modal fade" id="deleteKategoriModal" tabindex="-1" aria-labelledby="deleteKategoriLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <?=form_open("admin/category/delete")?>
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="deleteKategoriLabel">Hapus Kategori</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <input type="hidden" id="deleteKategoriId" name="kategori_id">
                            <p>Apakah Anda yakin ingin menghapus kategori <strong id="deleteKategoriNama"></strong>?</p>
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Hapus</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            </div>
                        </div>
                        <?=form_close()?>
                    </div>
                </div>

                <div class="modal fade" id="editProdukModal" tabindex="-1" aria-labelledby="editProdukLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <?=form_open("admin/produk/edit")?>
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="editProdukLabel">Edit Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <input type="hidden" id="editProdukId" name="produk_id">
                            <div class="mb-3">
                                <label for="editProdukNama" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="editProdukNama" name="produk_nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="editProdukKategori" class="form-label">Kategori</label>
                                <select class="form-select" id="editProdukKategori" name="produk_kategori" required>
                                    <?php
                                    foreach ($kategori as $kat) {
                                        echo '<option value="'.$kat['id'].'">'.esc($kat['nama']).'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="editProdukHarga" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="editProdukHarga" name="produk_harga" required>
                            </div>
                            <div class="mb-3">
                                <label for="editProdukStok" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="editProdukStok" name="produk_stok" required>
                            </div>
                            <div class="mb-3">
                                <label for="editProdukFoto" class="form-label">Foto Produk</label>
                                <input type="file" class="form-control" id="editProdukFoto" name="produk_foto" accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label for="editDeskripsiProduk" class="form-label">Deskripsi Produk</label>
                                <textarea class="form-control" id="editDeskripsiProduk" name="produk_deskripsi" rows="3"></textarea>
                            </div>
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            </div>
                        </div>
                        <?=form_close()?>
                    </div>
                </div>

                <div class="modal fade" id="deleteProdukModal" tabindex="-1" aria-labelledby="deleteProdukLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <?=form_open("admin/produk/delete")?>
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="deleteProdukLabel">Hapus Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <input type="hidden" id="deleteProdukId" name="produk_id">
                            <p>Apakah Anda yakin ingin menghapus produk <strong id="deleteProdukNama"></strong>?</p>
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Hapus</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            </div>
                        </div>
                        <?=form_close()?>
                    </div>
                </div>

                <!-- Modal Tambah Produk -->
                <div class="modal fade" id="produkModalTambah" tabindex="-1" aria-labelledby="produkModalTambahLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <?=form_open("/admin/produk/tambah", ["enctype" => "multipart/form-data"])?>
                     <!-- Ganti sesuai proses backend -->
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="produkModalTambahLabel">Tambah Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="mb-3">
                            <label for="namaProduk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="namaProduk" name="nama_produk" required>
                        </div>
                        <div class="mb-3">
                            <label for="hargaProduk" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="hargaProduk" name="harga_produk" required>
                        </div>
                        <div class="mb-3">
                            <label for="stokProduk" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="stokProduk" name="stok_produk" required>
                        </div>
                        <div class="mb-3">
                            <label for="kategoriProduk" class="form-label">Kategori</label>
                            <select class="form-select" id="kategoriProduk" name="kategori_produk" required>
                            <option value="">Pilih kategori</option>
                            <!-- Isi opsi kategori dari database atau statis -->
                            <?php
                            foreach ($kategori as $kat) {
                                echo '<option value="'.$kat['id'].'">'.esc($kat['nama']).'</option>';
                            }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="fotoProduk" class="form-label">Foto Produk</label>
                            <input type="file" class="form-control" id="fotoProduk" name="foto_produk" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsiProduk" class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" id="deskripsiProduk" name="deskripsi_produk" rows="3"></textarea>
                        </div>
                        <!-- Tambah input lain sesuai kebutuhan -->
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Produk</button>
                        </div>
                    </div>
                    <?=form_close()?>
                </div>
                </div>

                <!-- Modal Tambah Kategori -->
                <div class="modal fade" id="kategoriModalTambah" tabindex="-1" aria-labelledby="kategoriModalTambahLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <?=form_open("admin/category/tambah")?>
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="kategoriModalTambahLabel">Tambah Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="mb-3">
                            <label for="namaKategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="namaKategori" name="nama_kategori" required>
                        </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Kategori</button>
                        </div>
                    </div>
                    <?=form_close()?>
                </div>
                </div>



            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->



        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="<?=site_url()?>assets/admin/libs/jquery/jquery.min.js"></script>
        <script src="<?=site_url()?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?=site_url()?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?=site_url()?>assets/admin/libs/simplebar/simplebar.min.js"></script>
        <script src="<?=site_url()?>assets/admin/libs/node-waves/waves.min.js"></script>

        <!-- Icon -->

        <!-- apexcharts -->
        <script src="<?=site_url()?>assets/admin/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="<?=site_url()?>assets/admin/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="<?=site_url()?>assets/admin/libs/jsvectormap/maps/world-merc.js"></script>

        <script src="<?=site_url()?>assets/admin/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="<?=site_url()?>assets/admin/js/app.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
  // --- Edit Kategori ---
  document.querySelectorAll('#kategori tbody tr').forEach(row => {
    const editBtn = row.querySelector('button.btn-primary');
    editBtn.addEventListener('click', () => {
      const id = row.cells[0].textContent.trim();
      const nama = row.cells[1].textContent.trim();

      document.getElementById('editKategoriId').value = id;
      document.getElementById('editKategoriNama').value = nama;

      const editKategoriModal = new bootstrap.Modal(document.getElementById('editKategoriModal'));
      editKategoriModal.show();
    });
  });

  // --- Delete Kategori ---
  document.querySelectorAll('#kategori tbody tr').forEach(row => {
    const deleteBtn = row.querySelector('button.btn-danger');
    deleteBtn.addEventListener('click', () => {
      const id = row.cells[0].textContent.trim();
      const nama = row.cells[1].textContent.trim();

      document.getElementById('deleteKategoriId').value = id;
      document.getElementById('deleteKategoriNama').textContent = nama;

      const deleteKategoriModal = new bootstrap.Modal(document.getElementById('deleteKategoriModal'));
      deleteKategoriModal.show();
    });
  });

  // --- Edit Produk ---
  document.querySelectorAll('#produk tbody tr').forEach(row => {
    const editBtn = row.querySelector('button.btn-primary');
    editBtn.addEventListener('click', () => {
      const id = row.cells[0].textContent.trim();
      const nama = row.cells[1].textContent.trim();
      const kategori = row.cells[2].textContent.trim();
      const hargaText = row.cells[3].textContent.trim();
      const stok = row.cells[4].textContent.trim();
      const deskripsi = editBtn.dataset.deskripsi;

      // Ambil ID kategori dari nama kategori
      // Contoh sederhana, sesuaikan dengan data asli
      const kategoriMap = {
        'Elektronik': '1',
        'Fashion': '2',
        'Peralatan Rumah': '3'
      };
      const kategoriId = kategoriMap[kategori] || '';

      // Ubah format harga Rp menjadi angka (hapus Rp dan titik)
      const harga = Number(hargaText.replace(/[^0-9]/g, ''));

      document.getElementById('editProdukId').value = id;
      document.getElementById('editProdukNama').value = nama;
      document.getElementById('editProdukKategori').value = kategoriId;
      document.getElementById('editProdukHarga').value = harga;
      document.getElementById('editProdukStok').value = stok;
      document.getElementById('editDeskripsiProduk').value = deskripsi; // Isi deskripsi ke textarea


      const editProdukModal = new bootstrap.Modal(document.getElementById('editProdukModal'));
      editProdukModal.show();
    });
  });

  // --- Delete Produk ---
  document.querySelectorAll('#produk tbody tr').forEach(row => {
    const deleteBtn = row.querySelector('button.btn-danger');
    deleteBtn.addEventListener('click', () => {
      const id = row.cells[0].textContent.trim();
      const nama = row.cells[1].textContent.trim();

      document.getElementById('deleteProdukId').value = id;
      document.getElementById('deleteProdukNama').textContent = nama;

      const deleteProdukModal = new bootstrap.Modal(document.getElementById('deleteProdukModal'));
      deleteProdukModal.show();
    });
  });
});

        </script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
          <?php if ($msg = session()->getFlashdata('error')): ?>
            Swal.fire({
              icon: 'error',
              title: 'Gagal',
              text: "<?= esc($msg) ?>",
              confirmButtonText: 'Tutup'
            });
          <?php elseif ($msg = session()->getFlashdata('success')): ?>
            Swal.fire({
              icon: 'success',
              title: 'Berhasil',
              text: "<?= esc($msg) ?>",
              timer: 2000,
              showConfirmButton: false,
              position: 'top-end',
              toast: true
            });
          <?php endif; ?>
        });
        </script>

    </body>

<!-- Mirrored from themesdesign.in/tocly/layouts/5.3.1/layouts-light-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Nov 2023 08:53:05 GMT -->
</html>
