<!doctype html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Beli.in Admin - Dashboard </title>
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
                                    <img src="/assets/img/logo/logo.svg" alt="logo-sm-dark" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="/assets/img/logo/logo.svg" alt="logo-dark" height="25">
                                </span>
                            </a>

                            <a href="<?=site_url()?>" class="logo logo-light">
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
                        <h4 class="page-title mb-0">Dashboard Admin</h4>
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
                            <img src="/assets/images/logo-sm-light.png" alt="logo-sm-light" height="24">
                        </span>
                        <span class="logo-lg">
                            <img src="/assets/images/logo-light.png" alt="logo-light" height="22">
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
                                <a href="" class="waves-effect">
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

                        
                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                                    <i class="uim uim-briefcase"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden ms-4">
                                                <p class="text-muted text-truncate font-size-15 mb-2"> Total Pendapatan</p>
                                                <h3 class="fs-4 flex-grow-1 mb-3">Rp <?=esc(number_format($pendapatan ?? 0, 0, ',', '.'))?> </h3>
                                            </div>
                                            <div class="flex-shrink-0 align-self-start">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn-icon border rounded-circle" href="#"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ri-more-2-fill text-muted font-size-16"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Yearly</a>
                                                        <a class="dropdown-item" href="#">Monthly</a>
                                                        <a class="dropdown-item" href="#">Weekly</a>
                                                        <a class="dropdown-item" href="#">Today</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                                    <i class="uim uim-layer-group"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden ms-4">
                                                <p class="text-muted text-truncate font-size-15 mb-2"> Total Orderan</p>
                                                <h3 class="fs-4 flex-grow-1 mb-3"><?=esc(count($orders))?> </h3>
                                            </div>
                                            <div class="flex-shrink-0 align-self-start">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn-icon border rounded-circle" href="#"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ri-more-2-fill text-muted font-size-16"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Yearly</a>
                                                        <a class="dropdown-item" href="#">Monthly</a>
                                                        <a class="dropdown-item" href="#">Weekly</a>
                                                        <a class="dropdown-item" href="#">Today</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                                    <i class="uim uim-scenery"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden ms-4">
                                                <p class="text-muted text-truncate font-size-15 mb-2"> Total Produk</p>
                                                <h3 class="fs-4 flex-grow-1 mb-3"><?=count($produk)?></span></h3>
                                            </div>
                                            <div class="flex-shrink-0 align-self-start">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn-icon border rounded-circle" href="#"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ri-more-2-fill text-muted font-size-16"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Yearly</a>
                                                        <a class="dropdown-item" href="#">Monthly</a>
                                                        <a class="dropdown-item" href="#">Weekly</a>
                                                        <a class="dropdown-item" href="#">Today</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                                    <i class="uim uim-airplay"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden ms-4">
                                                <p class="text-muted text-truncate font-size-15 mb-2"> Total Customer </p>
                                                <h3 class="fs-4 flex-grow-1 mb-3"><?=count($customer) - 1?></h3>
                                            </div>
                                            <div class="flex-shrink-0 align-self-start">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn-icon border rounded-circle" href="#"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ri-more-2-fill text-muted font-size-16"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Yearly</a>
                                                        <a class="dropdown-item" href="#">Monthly</a>
                                                        <a class="dropdown-item" href="#">Weekly</a>
                                                        <a class="dropdown-item" href="#">Today</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ROW -->
                        <div class="row">
                           <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header border-0 align-items-center d-flex pb-0">
                                        <h4 class="card-title mb-0 flex-grow-1">Status Transaksi </h4>
                                        <div>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold">Sort By:</span>
                                                    <span class="text-muted">Yearly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                    <a class="dropdown-item" href="#">Today</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-2">
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0">
                                                <thead>
                                                    <tr>

                                                        <th>Order ID</th>
                                                        <th>Nama Customer</th>
                                                        <th>Tanggal</th>
                                                        <th>Total</th>
                                                        <th>Total Transaksi</th>
                                                        <th>Status Pembayaran</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($orders as $order) {
                                                    ?>
                                                    <tr>
                                                        <td><a href="javascript: void(0);" class="text-body"><?=$order['id']?></a> </td>
                                                        <td><img src="<?=site_url()?>assets/admin/images/users/avatar-1.jpg" class="avatar-xs rounded-circle me-2" alt="..."> <?=$order['nama_user']?></td>
                                                        <td><?=date('d M, Y', strtotime($order['created_at']))?> </td>
                                                        <td>Rp <?=number_format($order['total'], 0, ',', '.')?></td>
                                                        <td><i class="fab fa-cc-mastercard me-1"></i> QRIS</td>
                                                        <td><span class="badge rounded badge-soft-warning font-size-12"><?=esc($order['status'])?></span></td> <!-- Statusnya ada Success, Danger, dan Pending -->
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                           </div>
                        </div>
                         <!-- END ROW -->
                        <div class="row"> <!-- Kalo stoknya dibawah 30 maka produknya muncul di tabel inii-->
                           <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header border-0 align-items-center d-flex pb-0">
                                        <h4 class="card-title mb-0 flex-grow-1">Statistik Produk Rendah</h4>
                                    </div>
                                    <div class="card-body pt-2">
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Produk</th>
                                                        <th>Kategori</th>
                                                        <th>Stok</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($produk as $no => $prod) {
                                                    ?>
                                                    <tr>
                                                        <td><?=$no + 1?> </td>
                                                        <td><?=esc($prod['nama'])?></td>
                                                        <td><?=esc($prod['nama_kategori'])?></td>
                                                        <td><?=$prod['stok']?></td> 
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                           </div>
                        </div>
                         <!-- END ROW -->

                    </div> <!-- container-fluid -->
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
        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <!-- apexcharts -->
        <script src="<?=site_url()?>assets/admin/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="<?=site_url()?>assets/admin/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="<?=site_url()?>assets/admin/libs/jsvectormap/maps/world-merc.js"></script>

        <script src="<?=site_url()?>assets/admin/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="<?=site_url()?>assets/admin/js/app.js"></script>
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
