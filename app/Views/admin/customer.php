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
                        <h4 class="page-title mb-0">Customers</h4>
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
                                <span class="ms-1 fw-medium user-name-text"><?=esc($admin['nama'])?></span>
                            </div>

                            <div class="flex-shrink-0 text-end">
                                <i class="mdi mdi-dots-vertical font-size-16"></i>
                            </div>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="<?=site_url()?>admin/logout"><i class="mdi text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
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
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table table-hover table-nowrap align-middle mb-0">
                                                <thead class="bg-light">
                                                    <tr class="text-muted text-uppercase">
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col" style="width: 20%;">Email</th>
                                                        <th scope="col">Tanggal Daftar</th>
                                                        <th scope="col">Jumlah Order</th>
                                                        <th scope="col" style="width: 8%;">Status</th>
                                                        <th scope="col" style="width: 12%;">Aksi</th>
                                                    </tr>
                                                </thead>
                        
                                                <tbody>
                                                    <?php
                                                    foreach (array_reverse($users) as $no => $user) {
                                                        if ($user['hak'] === "Admin") continue;
                                                        ?>
                                                    <tr>
                                                        <td><p class="fw-medium mb-0"><?=$user['id']?></p></td>
                                                        <td><img src="<?=site_url()?>assets/admin/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                            <a href="#javascript: void(0);" class="text-body align-middle fw-medium"><?=htmlspecialchars($user['nama'])?></a>
                                                        </td>
                                                        <td><?=htmlspecialchars($user['email'])?></td>
                                                        <td><?=htmlspecialchars($user['added_on'])?></td>
                                                        <td>50</td>
                                                        <td><?=($user['status'] === "On") ? '<span class="badge badge-soft-success p-2">Aktif' : '<span class="badge badge-soft-danger p-2">Nonaktif' ?></span></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-light btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-vertical align-middle font-size-16"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li>
                                                                        <button class="dropdown-item" href="javascript:void(0);"><i class="mdi mdi-pencil-outline font-size-16 align-middle me-2 text-muted"></i>
                                                                            Edit</button>
                                                                    </li>
                                                                    <li class="dropdown-divider"></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn" href="#">
                                                                            <i class="mdi mdi-trash-can-outline font-size-16 align-middle me-2 text-muted"></i>
                                                                            Delete
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        </div><!-- end table responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container-fluid -->
                </div>
            </div>
            <!-- end main content-->

            <!-- Modal Edit Customer -->
            <div class="modal fade" id="editCustomerModal" tabindex="-1" aria-labelledby="editCustomerModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-custom">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCustomerModalLabel">Edit Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?=form_open("admin/customer/edit", ["id" => "editCustomerForm"])?>
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
                            <option value="On">Aktif</option>
                            <option value="Off">Nonaktif</option>
                        </select>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                <?=form_close()?>
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
      <?=form_open("admin/customer/delete", ["id" => "deleteCustomerForm"])?>
        <div class="modal-body">
          <input type="hidden" name="id_customer" id="delete-id-customer">
          <p>Apakah kamu yakin ingin menghapus customer <strong id="delete-customer-name"></strong>?</p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Hapus</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      <?=form_close()?>
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
                // Event delegation untuk tombol Edit
                document.querySelectorAll(".dropdown-item").forEach(function (button) {
                if (button.textContent.includes("Edit")) {
                    button.addEventListener("click", function () {
                    const row = this.closest("tr");

                    const id = row.children[0].textContent.trim();
                    const name = row.querySelector("td:nth-child(2) a").textContent.trim();
                    const email = row.children[2].textContent.trim();
                    const status = row.querySelector("td:nth-child(6) .badge").textContent.trim();

                    document.getElementById("edit-id-customer").value = id;
                    document.getElementById("edit-nama").value = name;
                    document.getElementById("edit-email").value = email;
                    document.getElementById("edit-status").value = status;

                    // Tampilkan modal
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
