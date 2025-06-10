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
                        <h4 class="page-title mb-0">Shipping</h4>
                      </div>
                      <!-- end page title -->
                    </div>

                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

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
                                <span class="ms-1 fw-medium user-name-text">Nama Admin Disini</span>
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

                        <!-- Judul Halaman -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <h4 class="mb-0">Detail Pengiriman</h4>
                                <p class="text-muted">Informasi lengkap mengenai status pengiriman dan detail barang.</p>
                            </div>
                        </div>

                        <!-- Info Umum -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card border shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title">Informasi Order</h5>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><strong>Order ID:</strong> <?=esc($order[0]['id'])?></li>
                                            <li class="list-group-item"><strong>Nama Customer:</strong> <?=esc($order[0]['nama_user'])?></li>
                                            <li class="list-group-item"><strong>Tanggal Order:</strong> <?=esc($order[0]['created_at'])?></li>
                                            <li class="list-group-item"><strong>Status Pembayaran:</strong> <span class="badge bg-warning"><?=esc($order[0]['status'])?></span></li>
                                            <li class="list-group-item"><strong>Metode Pembayaran:</strong> QRIS</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Status Shipping -->
                            <div class="col-lg-6">
                                <div class="card border shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title">Status Pengiriman</h5>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><strong>Status:</strong> <span class="badge bg-info">Sedang Dikirim</span></li>
                                            <li class="list-group-item"><strong>Kurir:</strong> JNE - REG</li>
                                            <li class="list-group-item"><strong>Nomor Resi:</strong> JNE123456789</li>
                                            <li class="list-group-item"><strong>Estimasi Sampai:</strong> <?= (new \DateTime(esc($order[0]['created_at'])))->modify('+3 days')->format('Y-m-d H:i:s') ?></li>
                                            <li class="list-group-item"><strong>Alamat Pengiriman:</strong> <?=esc(!empty($order[0]['alamat1']) ? $order[0]['alamat1'] : $order[0]['alamat2'])?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Daftar Barang -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card border shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title">Barang yang Dikirim</h5>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Nama Produk</th>
                                                        <th>Kuantitas</th>
                                                        <th>Harga Satuan</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($order as $item): ?>
                                                    <tr>
                                                        <td><?= esc($item['nama_produk']) ?></td>
                                                        <td><?= esc($item['jumlah']) ?></td>
                                                        <td>Rp <?= number_format($item['harga_produk'], 0, ',', '.') ?></td>
                                                        <td>Rp <?= number_format($item['harga_produk'] * $item['jumlah'], 0, ',', '.') ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                    <tr>
                                                        <td colspan="3" class="text-end"><strong>Total</strong></td>
                                                        <td><strong>Rp <?=number_format($order[0]['total'], 0, ',', '.')?></strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <a href="javascript:window.history.back()" class="btn btn-secondary mt-3">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- container-fluid -->
                </div> <!-- page-content -->
            </div> <!-- main-content -->


            <!-- end main content-->

            <!-- Modal Edit Customer -->
            <div class="modal fade" id="editCustomerModal" tabindex="-1" aria-labelledby="editCustomerModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-custom">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCustomerModalLabel">Edit Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editCustomerForm">
                    <div class="modal-body">
                    <input type="hidden" name="id_customer" id="edit-id-customer">
                    <div class="mb-3">
                        <label for="edit-nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="edit-nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="edit-email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-status" class="form-label">Status</label>
                        <select class="form-select" id="edit-status" name="status">
                        <option value="Aktif">Aktif</option>
                        <option value="Nonaktif">Nonaktif</option>
                        </select>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
                </div>
            </div>
            </div>

            <!-- Modal Hapus Customer -->
            <!-- Modal Hapus Customer -->
<div class="modal fade" id="deleteCustomerModal" tabindex="-1" aria-labelledby="deleteCustomerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-custom">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteCustomerModalLabel">Hapus Customer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="deleteCustomerForm" action="delete_customer.php" method="POST">
        <div class="modal-body">
          <input type="hidden" name="id_customer" id="delete-id-customer">
          <p>Apakah kamu yakin ingin menghapus customer <strong id="delete-customer-name"></strong>?</p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Hapus</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>


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
            document.addEventListener("DOMContentLoaded", function () {
            // Cari semua tombol dengan class "dropdown-item"
            document.querySelectorAll(".dropdown-item").forEach(function (button) {
                if (button.textContent.includes("Edit")) {  // Pastikan tombol yang berisi kata "Edit"
                button.addEventListener("click", function () {
                    // Dapatkan elemen <tr> terdekat (baris tabel) tempat tombol ini berada
                    const row = this.closest("tr");

                    // Ambil data dari kolom tabel di baris tersebut
                    const id = row.children[0].textContent.trim();
                    const name = row.querySelector("td:nth-child(2) a").textContent.trim();
                    const email = row.children[2].textContent.trim();
                    const status = row.querySelector("td:nth-child(6) .badge").textContent.trim();

                    // Masukkan data yang diambil ke form di modal
                    document.getElementById("edit-id-customer").value = id;
                    document.getElementById("edit-nama").value = name;
                    document.getElementById("edit-email").value = email;
                    document.getElementById("edit-status").value = status;

                    // Tampilkan modal dengan Bootstrap JS
                    new bootstrap.Modal(document.getElementById("editCustomerModal")).show();
                });
                }
            });
            });
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".remove-item-btn").forEach(function (btn) {
                btn.addEventListener("click", function (e) {
                e.preventDefault();

                const row = this.closest("tr");
                const id = row.querySelector("td").textContent.trim(); // No / ID di kolom pertama
                const name = row.querySelector("td:nth-child(2) a").textContent.trim();

                document.getElementById("delete-id-customer").value = id;
                document.getElementById("delete-customer-name").textContent = name;

                const deleteModal = new bootstrap.Modal(document.getElementById("deleteCustomerModal"));
                deleteModal.show();
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
