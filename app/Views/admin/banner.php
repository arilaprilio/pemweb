<!doctype html>
<html lang="en">
<head>
        
        <meta charset="utf-8" />
        <title>Beli.in Admin - Banner Management</title>
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
                            <a href="<?=site_url()?>index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="/assets/img/logo/logo.svg" alt="logo-sm-dark" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="/assets/img/logo/logo.svg" alt="logo-dark" height="25">
                                </span>
                            </a>

                            <a href="<?=site_url()?>index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="/assets/img/logo/logo.svg" alt="logo-sm-light" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="/assets/img/logo/logo.svg" alt="logo-light" height="25">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>
            
                      <!-- start page title -->
                      <div class="page-title-box align-self-center d-none d-md-block">
                        <h4 class="page-title mb-0">Kelola Banner</h4>
                      </div>
                      <!-- end page title -->
                    </div>

                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                 <!-- LOGO -->
                 <div class="navbar-brand-box">
                    <a href="<?=site_url()?>index.html" class="logo logo-dark">
                        <span class="logo-lg">
                            <img src="/assets/img/logo/logo.svg" alt="logo-dark" height="50">
                        </span>
                    </a>

                    <a href="<?=site_url()?>index.html" class="logo logo-light">
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
                        <a class="dropdown-item" href="#"><i class="mdi text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
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
      <?=form_open("admin/banner/update")?>
        <div class="row">
          <!-- Contoh banner 1 -->
        <?php
        foreach (range(1, 6) as $i) {
        ?>
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                <h5 class="card-title">Banner <?=$i?></h5>
                <div class="mb-3">
                    <label for="produk1" class="form-label">Pilih Produk</label>
                    <select class="form-select" id="produk<?=$i?>" name="produk<?=$i?>">
                    <option value="99">-- Pilih Produk --</option>
                    <?php
                    foreach ($produk as $p) {
                        echo '<option value="'.$p['id'].'">'.$p['nama'].'</option>';
                    }
                    ?>
                    </select>
                </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <!-- Tombol Simpan -->
        <div class="text-end">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKonfirmasi">
            Simpan Perubahan
          </button>
        </div>

        <!-- Modal Konfirmasi -->
        <div class="modal fade" id="modalKonfirmasi" tabindex="-1" aria-labelledby="modalKonfirmasiLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalKonfirmasiLabel">Konfirmasi Simpan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
              </div>
              <div class="modal-body">
                Yakin mau simpan? Banner di halaman utama akan berubah.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Ya, Simpan</button>
              </div>
            </div>
          </div>
        </div>
      <?=form_close()?>
    </div>
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
            // --- Edit  ---
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