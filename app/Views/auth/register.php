<!doctype html>
<html class="no-js" lang="id">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Beliin. Tempatnya Harga Hemat</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="/assets/img/logo/favicon.png">
      <link rel="stylesheet" href="<?=site_url()?>assets/css/bootstrap.css">
      <link rel="stylesheet" href="<?=site_url()?>assets/css/animate.css">
      <link rel="stylesheet" href="<?=site_url()?>assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="<?=site_url()?>assets/css/slick.css">
      <link rel="stylesheet" href="<?=site_url()?>assets/css/magnific-popup.css">
      <link rel="stylesheet" href="<?=site_url()?>assets/css/font-awesome-pro.css">
      <link rel="stylesheet" href="<?=site_url()?>assets/css/flaticon_shofy.css">
      <link rel="stylesheet" href="<?=site_url()?>assets/css/spacing.css">
      <link rel="stylesheet" href="<?=site_url()?>assets/css/main.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


      <!-- pre loader area start -->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <!-- loading content here -->
               <div class="tp-preloader-content">
                  <div class="tp-preloader-logo">
                     <div class="tp-preloader-circle">
                        <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle> 
                           <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle> 
                       </svg>
                     </div>
                     <img src="<?=site_url()?>assets/img/logo/preloader/preloader-icon.svg" alt="">
                  </div>
                  <p class="tp-preloader-subtitle">Loading</p>
               </div>
            </div>
         </div>  
      </div>
      <!-- pre loader area end -->

      <!-- back to top start -->
      <div class="back-to-top-wrapper">
         <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>               
         </button>
      </div>
      <!-- back to top end -->

      <!-- offcanvas area start -->
      <div class="offcanvas__area">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
               <button class="offcanvas__close-btn offcanvas-close-btn">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                 </svg>
               </button>
            </div>
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo logo">
                     <a href="index.html">
                        <img src="assets/img/logo/logo.svg" alt="logo">
                     </a>
                  </div>
               </div>
               <div class="offcanvas__category pb-40">
                  <button class="tp-offcanvas-category-toggle">
                     <i class="fa-solid fa-bars"></i>
                     All Categories
                  </button>
                  <div class="tp-category-mobile-menu">
                     
                  </div>
               </div>
               <div class="tp-main-menu-mobile fix mb-40"></div>

               <div class="offcanvas__contact align-items-center d-none">
                  <div class="offcanvas__contact-icon mr-20">
                     <span>
                        <img src="assets/img/icon/contact.png" alt="">
                     </span>
                  </div>
                  <div class="offcanvas__contact-content">
                     <h3 class="offcanvas__contact-title">
                        <a href="tel:098-852-987">004524865</a>
                     </h3>
                  </div>
               </div>
               <div class="offcanvas__btn">
                  <a href="contact.html" class="tp-btn-2 tp-btn-border-2">Contact Us</a>
               </div>
            </div>
            <div class="offcanvas__bottom">
               <div class="offcanvas__footer d-flex align-items-center justify-content-between">
                  <div class="offcanvas__currency-wrapper currency">
                     <span class="offcanvas__currency-selected-currency tp-currency-toggle" id="tp-offcanvas-currency-toggle">Currency : USD</span>
                     <ul class="offcanvas__currency-list tp-currency-list">
                        <li>USD</li>
                        <li>ERU</li>
                        <li>BDT </li>
                        <li>INR</li>
                     </ul>
                  </div>
                  <div class="offcanvas__select language">
                     <div class="offcanvas__lang d-flex align-items-center justify-content-md-end">
                        <div class="offcanvas__lang-img mr-15">
                           <img src="assets/img/icon/language-flag.png" alt="">
                        </div>
                        <div class="offcanvas__lang-wrapper">
                           <span class="offcanvas__lang-selected-lang tp-lang-toggle" id="tp-offcanvas-lang-toggle">English</span>
                           <ul class="offcanvas__lang-list tp-lang-list">
                              <li>Spanish</li>
                              <li>Portugese</li>
                              <li>American</li>
                              <li>Canada</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->

      <!-- mobile menu area start -->
      <div id="tp-bottom-menu-sticky" class="tp-mobile-menu d-lg-none">
         <div class="container">
            <div class="row row-cols-5">
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <a href="shop.html" class="tp-mobile-item-btn">
                        <i class="flaticon-store"></i>
                        <span>Store</span>
                     </a>
                  </div>
               </div>
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <button class="tp-mobile-item-btn tp-search-open-btn">
                        <i class="flaticon-search-1"></i>
                        <span>Search</span>
                     </button>
                  </div>
               </div>
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <a href="wishlist.html" class="tp-mobile-item-btn">
                        <i class="flaticon-love"></i>
                        <span>Wishlist</span>
                     </a>
                  </div>
               </div>
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <a href="profile.html" class="tp-mobile-item-btn">
                        <i class="flaticon-user"></i>
                        <span>Account</span>
                     </a>
                  </div>
               </div>
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <button class="tp-mobile-item-btn tp-offcanvas-open-btn">
                        <i class="flaticon-menu-1"></i>
                        <span>Menu</span>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- mobile menu area end -->

      <!-- search area start -->
      <section class="tp-search-area">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-search-form">
                     <div class="tp-search-close text-center mb-20">
                        <button class="tp-search-close-btn tp-search-close-btn"></button>
                     </div>
                     <form action="#">
                        <div class="tp-search-input mb-10">
                           <input type="text" placeholder="Search for product...">
                           <button type="submit"><i class="flaticon-search-1"></i></button>
                        </div>
                        <div class="tp-search-category">
                           <span>Search by : </span>
                           <a href="#">Men, </a>
                           <a href="#">Women, </a>
                           <a href="#">Children, </a>
                           <a href="#">Shirt, </a>
                           <a href="#">Demin</a>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- search area end -->

      <!-- cart mini area start -->
      <div class="cartmini__area">
         <div class="cartmini__wrapper d-flex justify-content-between flex-column">
             <div class="cartmini__top-wrapper">
                 <div class="cartmini__top p-relative">
                     <div class="cartmini__top-title">
                         <h4>Cart</h4>
                     </div>
                     <div class="cartmini__close">
                         <button type="button" class="cartmini__close-btn cartmini-close-btn"><i class="fal fa-times"></i></button>
                     </div>
                 </div>
                 <div class="cartmini__widget">
                     <?php foreach ($carts as $cart): ?>
                        <div class="cartmini__widget-item">
                           <div class="cartmini__thumb">
                              <a href="<?=site_url()?>product/<?=esc($cart['produk_id'])?>">
                                 <img src="<?=site_url()?><?=esc($cart['foto_produk'])?>" alt="<?=esc($cart['nama_produk'])?>">
                              </a>
                           </div>
                           <div class="cartmini__content">
                              <h5 class="cartmini__title">
                                 <a href="<?=site_url()?>product/<?=esc($cart['produk_id'])?>"><?=esc($cart['nama_produk'])?></a>
                              </h5>
                              <div class="cartmini__price-wrapper">
                                 <span class="cartmini__price">Rp <?=number_format($cart['harga_produk'], 0, ',', '.')?></span>
                                 <span class="cartmini__quantity">x<?=esc($cart['jumlah'])?></span>
                              </div>
                           </div>
                           <a href="<?=site_url()?>cart/delete?id=<?=esc($cart['id'])?>" class="cartmini__del">
                              <i class="fa-regular fa-xmark"></i>
                           </a>
                        </div>
                     <?php endforeach; ?>
                 </div>
                 <!-- for wp -->
                 <!-- if no item in cart -->
                 <div class="cartmini__empty text-center d-none">
                     <img src="<?=site_url()?>assets/img/product/cartmini/empty-cart.png" alt="">
                     <p>Your Cart is empty</p>
                     <a href="shop.html" class="tp-btn">Go to Shop</a>
                 </div>
             </div>
             <div class="cartmini__checkout">
                 <div class="cartmini__checkout-title mb-30">
                     <h4>Subtotal:</h4>
                      <span>Rp <?= number_format(array_sum(array_map(function($cart) {
                        return $cart['harga_produk'] * $cart['jumlah'];
                      }, $carts)), 0, ',', '.') ?></span>
                 </div>
                 <div class="cartmini__checkout-btn">
                     <a href="<?=site_url()?>cart" class="tp-btn mb-10 w-100"> view cart</a>
                     <a href="<?=site_url()?>checkout" class="tp-btn tp-btn-border w-100"> checkout</a>
                 </div>
             </div>
         </div>
     </div>
     <!-- cart mini area end -->

      <!-- header area start -->
      <header>
         <div class="tp-header-area tp-header-style-primary tp-header-height">
            <!-- header bottom start -->
            <div id="header-sticky" class="tp-header-bottom-2 tp-header-sticky">
               <div class="container">
                  <div class="tp-mega-menu-wrapper p-relative">
                     <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-5 col-md-5 col-sm-4 col-6">
                           <div class="logo ">
                              <a href="<?=site_url()?>">
                                 <img src="<?=site_url()?>assets/img/logo/logo.svg" alt="logo" class=" mt-20 mb-20" style="height: 70px; ">
                              </a>
                           </div>
                        </div>
                        <div class="col-xl-5 d-none d-xl-block">
                           <div class="main-menu menu-style-2">
                              <nav class="tp-main-menu-content">
                                 <ul>
                                    <li>
                                       <a href="<?=site_url()?>">Home</a>
                                    </li>
                                    <li class="has-dropdown has-mega-menu">
                                       <a href="#">Shop</a>
                                       <div class="shop-mega-menu tp-submenu tp-mega-menu">
                                       <div class="row">
                                        <div class="col-lg-2">
                                         <div class="shop-mega-menu-list">
                                           <a href="#" class="shop-mega-menu-title">Products</a>
                                           <ul>
                                           <?php foreach (array_slice($produk, 0, 8) as $prod): ?>
                                           <li><a href="/product/<?= esc($prod['id']) ?>"><?= esc($prod['nama']) ?></a></li>
                                           <?php endforeach; ?>
                                           </ul>
                                         </div>
                                        </div>
                                        <div class="col-lg-2">
                                         <div class="shop-mega-menu-list">
                                           <a href="#" class="shop-mega-menu-title">Categories</a>
                                           <ul>
                                           <?php foreach ($kategori as $kat): ?>
                                             <li><a href="<?=site_url()?>category/<?=esc($kat['id'])?>"><?= esc($kat['nama']) ?></a></li>
                                           <?php endforeach; ?>
                                           </ul>
                                         </div>
                                        </div>
                                        <div class="col-lg-2">
                                         <div class="shop-mega-menu-list">
                                           <a href="#" class="shop-mega-menu-title">Account</a>
                                           <ul>
                                           <li><a href="/auth/login">Login</a></li>
                                           <li><a href="/auth/register">Register</a></li>
                                           <li><a href="/profiles">Profile</a></li>
                                           </ul>
                                         </div>
                                        </div>
                                        <div class="col-lg-3">
                                         <div class="shop-mega-menu-img">
                                          <img src="<?=site_url()?><?= esc($produk[0]['foto']) ?>" alt="<?= esc($produk[0]['nama']) ?>">
                                          <div class="shop-mega-menu-btn">
                                           <a href="/product/<?= esc($produk[0]['id']) ?>" class="tp-menu-showcase-btn tp-menu-showcase-btn-2"><?= esc($produk[0]['nama']) ?></a>
                                          </div>
                                         </div>
                                        </div>
                                        <div class="col-lg-3">
                                         <div class="shop-mega-menu-img">
                                          <img src="<?=site_url()?><?= esc($produk[1]['foto']) ?>" alt="<?= esc($produk[1]['nama']) ?>">
                                          <div class="shop-mega-menu-btn">
                                           <a href="/product/<?= esc($produk[1]['id']) ?>" class="tp-menu-showcase-btn tp-menu-showcase-btn-2"><?= esc($produk[1]['nama']) ?></a>
                                          </div>
                                         </div>
                                        </div>
                                       </div>
                                       </div>
                                    </li>
                                    <li class="has-dropdown has-mega-menu ">
                                       
                                       <a href="#">Products</a>
                                       <ul class="tp-submenu tp-mega-menu mega-menu-style-2">
                                          <!-- first col -->
                                            <li class="has-dropdown">
                                              <a href="#" class="mega-menu-title">Top Sellers</a>
                                              <ul class="tp-submenu">
                                                <?php foreach (array_slice($orders, 0, 7) as $order): ?>
                                                   <li><a href="/produk/<?= esc($order['produk_id']) ?>"><?= esc($order['nama_produk']) ?></a></li>
                                                <?php endforeach; ?>
                                              </ul>
                                            </li>
                                            <!-- third col -->
                                            <li class="has-dropdown">
                                              <a href="#" class="mega-menu-title">Products</a>
                                              <ul class="tp-submenu">
                                                <?php foreach (array_slice($produk, 0, 7) as $prod): ?>
                                                   <li><a href="/produk/<?= esc($prod['id']) ?>"><?= esc($prod['nama']) ?></a></li>
                                                <?php endforeach; ?>
                                              </ul>
                                            </li>
                                            <!-- third col -->
                                            <li class="has-dropdown">
                                              <a href="#" class="mega-menu-title">Categories</a>
                                              <ul class="tp-submenu">
                                                <?php foreach (array_slice($kategori, 0, 7) as $kat): ?>
                                                   <li><a href="<?=site_url()?>category/<?=esc($kat['id'])?>"><?= esc($kat['nama']) ?></a></li>
                                                <?php endforeach; ?>
                                              </ul>
                                            </li>

                                          <!-- second col -->
                                          <li  class="has-dropdown">
                                             <a href="#" class="mega-menu-title">Account</a>
                                             <ul class="tp-submenu">
                                                <li><a href="/auth/login">Login</a></li>
                                                <li><a href="/auth/register">Register</a></li>
                                                <li><a href="/profiles">Profiles</a></li>
                                             </ul>
                                          </li>

                                       </ul>
                                    </li>
                                    <li><a href="contact">Contact</a></li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                        <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8 col-6">
                           <div class="tp-header-bottom-right d-flex align-items-center justify-content-end pl-30">
                              <div class="tp-header-search-2 d-none d-sm-block">
                                 <form action="#">
                                    <input type="text" placeholder="Search for Products...">
                                    <button type="submit">
                                       <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>                                       
                                    </button>
                                 </form>
                              </div>
                              <div class="tp-header-action d-flex align-items-center ml-30">
                                 <div class="tp-header-action-item d-none d-lg-block">
                                    <a href="<?=site_url()?>wishlist" class="tp-header-action-btn">
                                       <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M11.239 18.8538C13.4096 17.5179 15.4289 15.9456 17.2607 14.1652C18.5486 12.8829 19.529 11.3198 20.1269 9.59539C21.2029 6.25031 19.9461 2.42083 16.4289 1.28752C14.5804 0.692435 12.5616 1.03255 11.0039 2.20148C9.44567 1.03398 7.42754 0.693978 5.57894 1.28752C2.06175 2.42083 0.795919 6.25031 1.87187 9.59539C2.46978 11.3198 3.45021 12.8829 4.73806 14.1652C6.56988 15.9456 8.58917 17.5179 10.7598 18.8538L10.9949 19L11.239 18.8538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M7.26062 5.05302C6.19531 5.39332 5.43839 6.34973 5.3438 7.47501" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg> 
                                       <span class="tp-header-action-badge"><?= esc($total_wishlist ?? 0) ?></span>                          
                                    </a>
                                 </div>
                                 <div class="tp-header-action-item">
                                       <button class="tp-header-action-btn cartmini-open-btn" >
                                       <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.48626 20.5H14.8341C17.9004 20.5 20.2528 19.3924 19.5847 14.9348L18.8066 8.89359C18.3947 6.66934 16.976 5.81808 15.7311 5.81808H5.55262C4.28946 5.81808 2.95308 6.73341 2.4771 8.89359L1.69907 14.9348C1.13157 18.889 3.4199 20.5 6.48626 20.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M6.34902 5.5984C6.34902 3.21232 8.28331 1.27803 10.6694 1.27803V1.27803C11.8184 1.27316 12.922 1.72619 13.7362 2.53695C14.5504 3.3477 15.0081 4.44939 15.0081 5.5984V5.5984" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M7.70365 10.1018H7.74942" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M13.5343 10.1018H13.5801" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>    
                                       <span class="tp-header-action-badge"><?= esc($total_cart ?? 0) ?></span>                                                                          
                                    </button>
                                 </div>
                                 <div class="tp-header-action-item tp-header-hamburger mr-20 d-xl-none">
                                    <button type="button" class="tp-offcanvas-open-btn">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                          <rect x="10" width="20" height="2" fill="currentColor"/>
                                          <rect x="5" y="7" width="25" height="2" fill="currentColor"/>
                                          <rect x="10" y="14" width="20" height="2" fill="currentColor"/>
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->


      <main>

         <!-- breadcrumb area start -->
         <section class="breadcrumb__area include-bg text-center pt-95 pb-50">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Register</h3>
                        <div class="breadcrumb__list">
                           <span><a href="#">Home</a></span>
                           <span>Daftar</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->

         <!-- login area start -->
         <section class="tp-login-area pb-140 p-relative z-index-1 fix">
            <div class="tp-login-shape">
               <img class="tp-login-shape-1" src="assets/img/login/login-shape-1.png" alt="">
               <img class="tp-login-shape-2" src="assets/img/login/login-shape-2.png" alt="">
               <img class="tp-login-shape-3" src="assets/img/login/login-shape-3.png" alt="">
               <img class="tp-login-shape-4" src="assets/img/login/login-shape-4.png" alt="">
            </div>
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-xl-6 col-lg-8">
                     <div class="tp-login-wrapper">
                        <div class="tp-login-top text-center mb-30">
                           <h3 class="tp-login-title">Daftar Akun Beli.in</h3>
                           <p>Sudah punya akun? <span><a href="<?=site_url()?>auth/login">Login</a></span></p>
                        </div>
                        <?=form_open("auth/register/submit", ["class" => "tp-login-option"])?>
                           <div class="tp-login-input-wrapper">
                              <div class="tp-login-input-box">
                                 <div class="tp-login-input">
                                    <input id="name" type="text" placeholder="Nama Lengkap" name="nama">
                                 </div>
                                 <div class="tp-login-input-title">
                                    <label for="name">Nama</label>
                                 </div>
                              </div>
                              <div class="tp-login-input-box">
                                 <div class="tp-login-input">
                                    <input id="email" type="email" placeholder="example@mail.com" name="email">
                                 </div>
                                 <div class="tp-login-input-title">
                                    <label for="email">Alamat Email</label>
                                 </div>
                              </div>
                              <div class="tp-login-input-box">
                                 <div class="tp-login-input">
                                    <input id="tp_password" type="password" placeholder="Min. 6 Karakter" name="password">
                                 </div>
                                 <div class="tp-login-input-eye" id="password-show-toggle">
                                    <span id="open-eye" class="open-eye">
                                       <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 6.77778C1 6.77778 3.90909 1 9 1C14.0909 1 17 6.77778 17 6.77778C17 6.77778 14.0909 12.5556 9 12.5556C3.90909 12.5556 1 6.77778 1 6.77778Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M9.00018 8.94466C10.2052 8.94466 11.182 7.97461 11.182 6.77799C11.182 5.58138 10.2052 4.61133 9.00018 4.61133C7.79519 4.61133 6.81836 5.58138 6.81836 6.77799C6.81836 7.97461 7.79519 8.94466 9.00018 8.94466Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </span>
                                    <span id="close-eye" class="open-close">
                                       <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M6.8822 11.7457C6.72311 11.7457 6.56402 11.6871 6.43842 11.5615C5.7518 10.8749 5.375 9.9622 5.375 8.99926C5.375 6.99803 6.99943 5.3736 9.00066 5.3736C9.9636 5.3736 10.8763 5.7504 11.5629 6.43701C11.6801 6.55424 11.7471 6.71333 11.7471 6.8808C11.7471 7.04827 11.6801 7.20736 11.5629 7.32459L7.32599 11.5615C7.20039 11.6871 7.0413 11.7457 6.8822 11.7457ZM9.00066 6.6296C7.69442 6.6296 6.631 7.69302 6.631 8.99926C6.631 9.41793 6.73986 9.81985 6.94082 10.1715L10.1729 6.93941C9.82125 6.73845 9.41933 6.6296 9.00066 6.6296Z" fill="#1C274C"/>
                                          <path opacity="0.5" d="M3.63816 14.4503C3.49582 14.4503 3.3451 14.4001 3.22787 14.2996C2.33192 13.5376 1.52808 12.5998 0.841463 11.5112C-0.0461127 10.1296 -0.0461127 7.87721 0.841463 6.48723C2.88456 3.28861 5.8571 1.44647 8.99711 1.44647C10.8393 1.44647 12.6563 2.08285 14.2472 3.28024C14.5235 3.48957 14.5821 3.88312 14.3728 4.15944C14.1635 4.43576 13.7699 4.49437 13.4936 4.28504C12.1204 3.24674 10.5629 2.70248 8.99711 2.70248C6.29252 2.70248 3.70515 4.32691 1.89651 7.16547C1.2685 8.14516 1.2685 9.85332 1.89651 10.833C2.52451 11.8127 3.24462 12.6584 4.04009 13.345C4.29966 13.5711 4.33315 13.9646 4.10707 14.2326C3.98984 14.3749 3.814 14.4503 3.63816 14.4503Z" fill="#1C274C"/>
                                          <path opacity="0.5" d="M9.00382 16.552C7.89017 16.552 6.80163 16.3259 5.75496 15.8821C5.43678 15.7482 5.28606 15.3797 5.42003 15.0616C5.554 14.7434 5.92243 14.5927 6.24062 14.7266C7.12819 15.1034 8.05764 15.296 8.99545 15.296C11.7 15.296 14.2874 13.6716 16.0961 10.833C16.7241 9.85333 16.7241 8.14517 16.0961 7.16548C15.8365 6.75519 15.5518 6.36164 15.2503 5.99321C15.0326 5.72527 15.0745 5.33172 15.3425 5.10564C15.6104 4.88793 16.0039 4.92142 16.23 5.19775C16.5566 5.59967 16.8748 6.03508 17.1595 6.48724C18.047 7.86885 18.047 10.1213 17.1595 11.5113C15.1164 14.7099 12.1438 16.552 9.00382 16.552Z" fill="#1C274C"/>
                                          <path d="M9.58061 12.5747C9.28754 12.5747 9.01959 12.3654 8.96098 12.0639C8.89399 11.7206 9.12007 11.3941 9.46338 11.3355C10.3845 11.168 11.1548 10.3976 11.3223 9.47657C11.3893 9.13327 11.7158 8.91556 12.0591 8.97417C12.4024 9.04116 12.6285 9.36772 12.5615 9.71103C12.2936 11.1596 11.1381 12.3068 9.69783 12.5747C9.65597 12.5663 9.62247 12.5747 9.58061 12.5747Z" fill="#1C274C"/>
                                          <path d="M0.625908 18.0007C0.466815 18.0007 0.307721 17.9421 0.18212 17.8165C-0.0607068 17.5736 -0.0607068 17.1717 0.18212 16.9289L6.43702 10.674C6.67984 10.4312 7.08177 10.4312 7.32459 10.674C7.56742 10.9168 7.56742 11.3188 7.32459 11.5616L1.0697 17.8165C0.944096 17.9421 0.785002 18.0007 0.625908 18.0007Z" fill="#1C274C"/>
                                          <path d="M11.122 7.50881C10.9629 7.50881 10.8038 7.45019 10.6782 7.32459C10.4354 7.08177 10.4354 6.67984 10.6782 6.43702L16.9331 0.182121C17.1759 -0.0607068 17.5779 -0.0607068 17.8207 0.182121C18.0635 0.424948 18.0635 0.826869 17.8207 1.0697L11.5658 7.32459C11.4402 7.45019 11.2811 7.50881 11.122 7.50881Z" fill="#1C274C"/>
                                       </svg>
                                    </span>
                                 </div>
                                 <div class="tp-login-input-title">
                                    <label for="tp_password">Password</label>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-login-suggetions d-sm-flex align-items-center justify-content-between mb-20">
                              <div class="tp-login-remeber">
                                 <input id="remember" type="checkbox" name="syarat">
                                 <label for="remember">Saya menerima ketentuan <a href="#">Layanan & Kebijakan Privasi.</a></label>
                              </div>
                           </div>
                           <div class="tp-login-bottom">
                              <button class="tp-login-btn w-100" name="submit">Daftar Akun</button>
                           </div>
                        <?=form_close()?>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- login area end -->

      </main>
      

      <!-- footer area start -->
      <footer>
         <div class="tp-footer-area tp-footer-style-2 tp-footer-style-primary tp-footer-style-6" data-bg-color="#F4F7F9">
            <div class="tp-footer-top pt-95 pb-40">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-1 mb-50">
                           <div class="tp-footer-widget-content">
                              <div class="tp-footer-logo">
                                 <a href="index.html">
                                    <img src="assets/img/logo/logo.svg" alt="logo">
                                 </a>
                              </div>
                              <p class="tp-footer-desc">We are a team of designers and developers that create high quality WordPress</p>
                              <div class="tp-footer-social">
                                 <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                 <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                 <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                 <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-2 mb-50">
                           <h4 class="tp-footer-widget-title">My Account</h4>
                           <div class="tp-footer-widget-content">
                              <ul>
                                 <li><a href="#">Track Orders</a></li>
                                 <li><a href="#">Shipping</a></li>
                                 <li><a href="#">Wishlist</a></li>
                                 <li><a href="#">My Account</a></li>
                                 <li><a href="#">Order History</a></li>
                                 <li><a href="#">Returns</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-3 mb-50">
                           <h4 class="tp-footer-widget-title">Infomation</h4>
                           <div class="tp-footer-widget-content">
                              <ul>
                                 <li><a href="#">Our Story</a></li>
                                 <li><a href="#">Careers</a></li>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Terms & Conditions</a></li>
                                 <li><a href="#">Latest News</a></li>
                                 <li><a href="#">Contact Us</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-4 mb-50">
                           <h4 class="tp-footer-widget-title">Talk To Us</h4>
                           <div class="tp-footer-widget-content">
                              <div class="tp-footer-talk mb-20">
                                 <span>Got Questions? Call us</span>
                                 <h4><a href="tel:670-413-90-762">+670 413 90 762</a></h4>
                              </div>
                              <div class="tp-footer-contact">
                                 <div class="tp-footer-contact-item d-flex align-items-start">
                                    <div class="tp-footer-contact-icon">
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1 5C1 2.2 2.6 1 5 1H13C15.4 1 17 2.2 17 5V10.6C17 13.4 15.4 14.6 13 14.6H5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M13 5.40039L10.496 7.40039C9.672 8.05639 8.32 8.05639 7.496 7.40039L5 5.40039" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M1 11.4004H5.8" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M1 8.19922H3.4" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                       </span>
                                    </div>
                                    <div class="tp-footer-contact-content">
                                       <p><a href="https://html.weblearnbd.net/cdn-cgi/l/email-protection#2152494e475861525451514e53550f424e4c"><span class="__cf_email__" data-cfemail="2053484f465960535550504f52540e434f4d">[email&#160;protected]</span></a></p>
                                    </div>
                                 </div>
                                 <div class="tp-footer-contact-item d-flex align-items-start">
                                    <div class="tp-footer-contact-icon">
                                       <span>
                                          <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M8.50001 10.9417C9.99877 10.9417 11.2138 9.72668 11.2138 8.22791C11.2138 6.72915 9.99877 5.51416 8.50001 5.51416C7.00124 5.51416 5.78625 6.72915 5.78625 8.22791C5.78625 9.72668 7.00124 10.9417 8.50001 10.9417Z" stroke="currentColor" stroke-width="1.5"/>
                                             <path d="M1.21115 6.64496C2.92464 -0.887449 14.0841 -0.878751 15.7889 6.65366C16.7891 11.0722 14.0406 14.8123 11.6313 17.126C9.88298 18.8134 7.11704 18.8134 5.36006 17.126C2.95943 14.8123 0.210885 11.0635 1.21115 6.64496Z" stroke="currentColor" stroke-width="1.5"/>
                                          </svg>
                                       </span>
                                    </div>
                                    <div class="tp-footer-contact-content">
                                       <p><a href="https://www.google.com/maps/place/Sleepy+Hollow+Rd,+Gouverneur,+NY+13642,+USA/@44.3304966,-75.4552367,17z/data=!3m1!4b1!4m6!3m5!1s0x4cccddac8972c5eb:0x56286024afff537a!8m2!3d44.3304928!4d-75.453048!16s%2Fg%2F1tdsjdj4" target="_blank">79 Sleepy Hollow St. <br> Jamaica, New York 1432</a></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp-footer-bottom">
               <div class="container">
                  <div class="tp-footer-bottom-wrapper">
                     <div class="row align-items-center">
                        <div class="col-md-6">
                           <div class="tp-footer-copyright">
                              <p>© 2023 All Rights Reserved  |  HTML Template by <a href="index.html">Themepure</a>.</p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="tp-footer-payment text-md-end">
                              <p>
                                 <img src="assets/img/footer/footer-pay.png" alt="">
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer area end -->



      <!-- JS here -->
      <script data-cfasync="false" src="<?=site_url()?>../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?=site_url()?>assets/js/vendor/jquery.js"></script>
      <script src="<?=site_url()?>assets/js/vendor/waypoints.js"></script>
      <script src="<?=site_url()?>assets/js/bootstrap-bundle.js"></script>
      <script src="<?=site_url()?>assets/js/meanmenu.js"></script>
      <script src="<?=site_url()?>assets/js/swiper-bundle.js"></script>
      <script src="<?=site_url()?>assets/js/slick.js"></script>
      <script src="<?=site_url()?>assets/js/range-slider.js"></script>
      <script src="<?=site_url()?>assets/js/magnific-popup.js"></script>
      <script src="<?=site_url()?>assets/js/nice-select.js"></script>
      <script src="<?=site_url()?>assets/js/purecounter.js"></script>
      <script src="<?=site_url()?>assets/js/wow.js"></script>
      <script src="<?=site_url()?>assets/js/isotope-pkgd.js"></script>
      <script src="<?=site_url()?>assets/js/imagesloaded-pkgd.js"></script>
      <script src="<?=site_url()?>assets/js/ajax-form.js"></script>
      <script src="<?=site_url()?>assets/js/main.js"></script>
    <?php if ($msg = session()->getFlashdata('error')): ?>
      <script>
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: "<?=$msg?>",
        });
      </script>
    <?php endif; ?>
   </body>


</html>
