<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:15:24 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Shofy - Multipurpose eCommerce HTML Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

      <!-- CSS here -->
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
                                          <img src="<?= site_url();echo esc($produk[0]['foto']) ?>" alt="<?= esc($produk[0]['nama']) ?>">
                                          <div class="shop-mega-menu-btn">
                                           <a href="/product/<?= esc($produk[0]['id']) ?>" class="tp-menu-showcase-btn tp-menu-showcase-btn-2"><?= esc($produk[0]['nama']) ?></a>
                                          </div>
                                         </div>
                                        </div>
                                        <div class="col-lg-3">
                                         <div class="shop-mega-menu-img">
                                          <img src="<?= site_url();echo esc($produk[1]['foto']) ?>" alt="<?= esc($produk[1]['nama']) ?>">
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
                                       <span class="tp-header-action-badge"><?=count($wishlists)?></span>                          
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
                                       <span class="tp-header-action-badge"><?=count($carts)?></span>                                                                          
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

        <!-- profile area start -->
        <section class="profile__area pt-120 pb-120">
         <div class="container">
            <div class="profile__inner p-relative">
               <div class="profile__shape">
                  <img class="profile__shape-1" src="assets/img/login/laptop.png" alt="" >
                  <img class="profile__shape-2" src="assets/img/login/man.png" alt="" >
                  <img class="profile__shape-3" src="assets/img/login/shape-1.png" alt="" >
                  <img class="profile__shape-4" src="assets/img/login/shape-2.png" alt="" >
                  <img class="profile__shape-5" src="assets/img/login/shape-3.png" alt="" >
                  <img class="profile__shape-6" src="assets/img/login/shape-4.png" alt="" >
               </div>
               <div class="row">
                  <div class="col-xxl-4 col-lg-4">
                     <div class="profile__tab mr-40">
                        <nav>
                           <div class="nav nav-tabs tp-tab-menu flex-column" id="profile-tab" role="tablist">
                              <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><span><i class="fa-regular fa-user-pen"></i></span>Profile</button>
                              <button class="nav-link" id="nav-information-tab" data-bs-toggle="tab" data-bs-target="#nav-information" type="button" role="tab" aria-controls="nav-information" aria-selected="false"><span><i class="fa-regular fa-circle-info"></i></span> Information</button>
                              <button class="nav-link" id="nav-order-tab" data-bs-toggle="tab" data-bs-target="#nav-order" type="button" role="tab" aria-controls="nav-order" aria-selected="false"><span><i class="fa-light fa-clipboard-list-check"></i></span> My Orders </button>
                              <button class="nav-link" id="nav-password-tab" data-bs-toggle="tab" data-bs-target="#nav-password" type="button" role="tab" aria-controls="nav-password" aria-selected="false"><span><i class="fa-regular fa-lock"></i></span> Change Password</button>
                              <span id="marker-vertical" class="tp-tab-line d-none d-sm-inline-block"></span>
                           </div>
                        </nav>
                     </div>
                  </div>
                  <div class="col-xxl-8 col-lg-8">
                     <div class="profile__tab-content">
                        <div class="tab-content" id="profile-tabContent">
                           <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <div class="profile__main">
                                 <div class="profile__main-top pb-80">
                                    <div class="row align-items-center">
                                       <div class="col-md-6">
                                          <div class="profile__main-inner d-flex flex-wrap align-items-center">
                                             <div class="profile__main-thumb">
                                                <img src="<?=site_url()?>assets/img/users/user-10.jpg" alt="">
                                                <div class="profile__main-thumb-edit">
                                                   <input id="profile-thumb-input" class="profile-img-popup" type="file">
                                                   <label for="profile-thumb-input"><i class="fa-light fa-camera"></i></label>
                                                </div>
                                             </div>
                                             <div class="profile__main-content">
                                                <h4 class="profile__main-title">Welcome <?=htmlspecialchars($user['nama'])?>!</h4>
                                                <p>You have <span>08</span> notifications</p> <!-- ini hasil dari notifikasi orders + wishlist aja -->
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="profile__main-logout text-sm-end">
                                             <a href="<?=site_url()?>admin/logout" class="tp-logout-btn">Logout</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="profile__main-info">
                                    <div class="row gx-3">
                                       <div class="col-md-3 col-sm-6">
                                          <div class="profile__main-info-item">
                                             <div class="profile__main-info-icon">
                                                <span>
                                                   <span class="profile-icon-count profile-order"><?=count($carts)?></span>
                                                  <svg viewBox="0 0 512 512"><path d="M472.916,224H448.007a24.534,24.534,0,0,0-23.417-18H398V140.976a6.86,6.86,0,0,0-3.346-6.062L207.077,26.572a6.927,6.927,0,0,0-6.962,0L12.48,134.914A6.981,6.981,0,0,0,9,140.976V357.661a7,7,0,0,0,3.5,6.062L200.154,472.065a7,7,0,0,0,3.5.938,7.361,7.361,0,0,0,3.6-.938L306,415.108v41.174A29.642,29.642,0,0,0,335.891,486H472.916A29.807,29.807,0,0,0,503,456.282v-202.1A30.2,30.2,0,0,0,472.916,224Zm-48.077-4A10.161,10.161,0,0,1,435,230.161v.678A10.161,10.161,0,0,1,424.839,241H384.161A10.161,10.161,0,0,1,374,230.839v-.678A10.161,10.161,0,0,1,384.161,220ZM203.654,40.717l77.974,45.018L107.986,185.987,30.013,140.969ZM197,453.878,23,353.619V153.085L197,253.344Zm6.654-212.658-81.668-47.151L295.628,93.818,377.3,140.969ZM306,254.182V398.943l-95,54.935V253.344L384,153.085V206h.217A24.533,24.533,0,0,0,360.8,224H335.891A30.037,30.037,0,0,0,306,254.182Zm183,202.1A15.793,15.793,0,0,1,472.916,472H335.891A15.628,15.628,0,0,1,320,456.282v-202.1A16.022,16.022,0,0,1,335.891,238h25.182a23.944,23.944,0,0,0,23.144,17H424.59a23.942,23.942,0,0,0,23.143-17h25.183A16.186,16.186,0,0,1,489,254.182Z"/><path d="M343.949,325h7.327a7,7,0,1,0,0-14H351V292h19.307a6.739,6.739,0,0,0,6.655,4.727A7.019,7.019,0,0,0,384,289.743v-4.71A7.093,7.093,0,0,0,376.924,278H343.949A6.985,6.985,0,0,0,337,285.033v32.975A6.95,6.95,0,0,0,343.949,325Z"/><path d="M344,389h33a7,7,0,0,0,7-7V349a7,7,0,0,0-7-7H344a7,7,0,0,0-7,7v33A7,7,0,0,0,344,389Zm7-33h19v19H351Z"/><path d="M351.277,439H351V420h18.929a7.037,7.037,0,0,0,14.071.014v-6.745A7.3,7.3,0,0,0,376.924,406H343.949A7.191,7.191,0,0,0,337,413.269v32.975A6.752,6.752,0,0,0,343.949,453h7.328a7,7,0,1,0,0-14Z"/><path d="M393.041,286.592l-20.5,20.5-6.236-6.237a7,7,0,1,0-9.9,9.9l11.187,11.186a7,7,0,0,0,9.9,0l25.452-25.452a7,7,0,0,0-9.9-9.9Z"/><path d="M393.041,415.841l-20.5,20.5-6.236-6.237a7,7,0,1,0-9.9,9.9l11.187,11.186a7,7,0,0,0,9.9,0l25.452-25.452a7,7,0,0,0-9.9-9.9Z"/><path d="M464.857,295H420.891a7,7,0,0,0,0,14h43.966a7,7,0,0,0,0-14Z"/><path d="M464.857,359H420.891a7,7,0,0,0,0,14h43.966a7,7,0,0,0,0-14Z"/><path d="M464.857,423H420.891a7,7,0,0,0,0,14h43.966a7,7,0,0,0,0-14Z"/></svg>
                                                </span>
                                             </div>
                                             <h4 class="profile__main-info-title">Orders</h4>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-sm-6">
                                          <div class="profile__main-info-item">
                                             <div class="profile__main-info-icon">
                                                <span>
                                                   <span class="profile-icon-count profile-wishlist"><?=count($wishlists)?></span>
                                                   <svg viewBox="0 -20 480 480" xmlns="http://www.w3.org/2000/svg"><path d="m348 0c-43 .0664062-83.28125 21.039062-108 56.222656-24.71875-35.183594-65-56.1562498-108-56.222656-70.320312 0-132 65.425781-132 140 0 72.679688 41.039062 147.535156 118.6875 216.480469 35.976562 31.882812 75.441406 59.597656 117.640625 82.625 2.304687 1.1875 5.039063 1.1875 7.34375 0 42.183594-23.027344 81.636719-50.746094 117.601563-82.625 77.6875-68.945313 118.726562-143.800781 118.726562-216.480469 0-74.574219-61.679688-140-132-140zm-108 422.902344c-29.382812-16.214844-224-129.496094-224-282.902344 0-66.054688 54.199219-124 116-124 41.867188.074219 80.460938 22.660156 101.03125 59.128906 1.539062 2.351563 4.160156 3.765625 6.96875 3.765625s5.429688-1.414062 6.96875-3.765625c20.570312-36.46875 59.164062-59.054687 101.03125-59.128906 61.800781 0 116 57.945312 116 124 0 153.40625-194.617188 266.6875-224 282.902344zm0 0"/></svg>
                                                </span>
                                             </div>
                                             <h4 class="profile__main-info-title">Wishlist</h4>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-information" role="tabpanel" aria-labelledby="nav-information-tab">
                              <div class="profile__info">
                                 <h3 class="profile__info-title">Personal Details</h3>
                                 <div class="profile__info-content">
                                    <?=form_open("profiles/update")?>
                                       <div class="row">
                                          <div class="col-xxl-6 col-md-6">
                                             <div class="profile__input-box">
                                                <div class="profile__input">
                                                      <input type="text" placeholder="Enter your username" value="<?= !empty($profile['nama']) ? $profile['nama'] : '' ?>" name="nama">
                                                   <span>
                                                      <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M9 9C11.2091 9 13 7.20914 13 5C13 2.79086 11.2091 1 9 1C6.79086 1 5 2.79086 5 5C5 7.20914 6.79086 9 9 9Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                         <path d="M15.5 17.6C15.5 14.504 12.3626 12 8.5 12C4.63737 12 1.5 14.504 1.5 17.6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                      </svg>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                          
                                          <div class="col-xxl-6 col-md-6">
                                             <div class="profile__input-box">
                                                <div class="profile__input">
                                                   <input type="email" placeholder="Enter your email" value="<?= !empty($profile['email']) ? $profile['email'] : '' ?>" name="email">
                                                   <span>
                                                      <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M13 14.6H5C2.6 14.6 1 13.4 1 10.6V5C1 2.2 2.6 1 5 1H13C15.4 1 17 2.2 17 5V10.6C17 13.4 15.4 14.6 13 14.6Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                         <path d="M13 5.3999L10.496 7.3999C9.672 8.0559 8.32 8.0559 7.496 7.3999L5 5.3999" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                      </svg>                                             
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-6 col-md-6">
                                             <div class="profile__input-box">
                                                <div class="profile__input">
                                                   <input type="text" placeholder="Enter username" value="<?= !empty($profile['facebook']) ? $profile['facebook'] : '' ?>" name="facebook">
                                                   <span>
                                                      <i class="fa-brands fa-facebook-f"></i>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-6 col-md-6">
                                             <div class="profile__input-box">
                                                <div class="profile__input">
                                                   <input type="text" placeholder="Enter username" value="<?= !empty($profile['twitter']) ? $profile['twitter'] : '' ?>" name="twitter">
                                                   <span><i class="fa-brands fa-twitter"></i></span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-6 col-md-6">
                                             <div class="profile__input-box">
                                                <div class="profile__input">
                                                   <input type="text" placeholder="Enter your number" value="<?= !empty($profile['no_hp']) ? $profile['no_hp'] : '' ?>" name="nomor">
                                                   <span>
                                                      <svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M13.9148 5V13C13.9148 16.2 13.1076 17 9.87892 17H5.03587C1.80717 17 1 16.2 1 13V5C1 1.8 1.80717 1 5.03587 1H9.87892C13.1076 1 13.9148 1.8 13.9148 5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                         <path opacity="0.4" d="M9.08026 3.80054H5.85156" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                         <path opacity="0.4" d="M7.45425 14.6795C8.14522 14.6795 8.70537 14.1243 8.70537 13.4395C8.70537 12.7546 8.14522 12.1995 7.45425 12.1995C6.76327 12.1995 6.20312 12.7546 6.20312 13.4395C6.20312 14.1243 6.76327 14.6795 7.45425 14.6795Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                      </svg>                                                                                        
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-6 col-md-6">
                                             <div class="profile__input-box">
                                                <div class="profile__input">
                                                      <select name="gender">
                                                        <option value="Laki-laki" <?= (!empty($profile['jenis_kelamin']) && $profile['jenis_kelamin'] == 'Laki-laki') ? 'selected' : '' ?>>Male</option>
                                                        <option value="Perempuan" <?= (!empty($profile['jenis_kelamin']) && $profile['jenis_kelamin'] == 'Perempuan') ? 'selected' : '' ?>>Female</option>
                                                        <option value="Spakbor" <?= (!empty($profile['jenis_kelamin']) && $profile['jenis_kelamin'] == 'Spakbor') ? 'selected' : '' ?>>Spakbor</option>
                                                      </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-12">
                                             <div class="profile__input-box">
                                                <div class="profile__input">
                                                   <input type="text" placeholder="Enter your address" value="<?= !empty($profile['alamat']) ? $profile['alamat'] : '' ?>" name="alamat"> <!-- Address ini yang nanti berguna untuk delivery barangnya--> 
                                                   <span>
                                                      <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M7.99377 10.1461C9.39262 10.1461 10.5266 9.0283 10.5266 7.64946C10.5266 6.27061 9.39262 5.15283 7.99377 5.15283C6.59493 5.15283 5.46094 6.27061 5.46094 7.64946C5.46094 9.0283 6.59493 10.1461 7.99377 10.1461Z" stroke="currentColor" stroke-width="1.5"/>
                                                         <path d="M1.19707 6.1933C2.79633 -0.736432 13.2118 -0.72843 14.803 6.2013C15.7365 10.2663 13.1712 13.7072 10.9225 15.8357C9.29079 17.3881 6.70924 17.3881 5.06939 15.8357C2.8288 13.7072 0.263493 10.2583 1.19707 6.1933Z" stroke="currentColor" stroke-width="1.5"/>
                                                      </svg>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>

                                          <div class="col-xxl-12">
                                          </div>
                                          <div class="col-xxl-12">
                                             <div class="profile__btn">
                                                <button type="submit" class="tp-btn" name="submit">Update Profile</button>
                                             </div>
                                          </div>
                                       </div>
                                    <?=form_close()?>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
                              <div class="profile__password">
                                 <?=form_open("profiles/password")?>
                                    <div class="row">
                                       <div class="col-xxl-12">
                                          <div class="tp-profile-input-box">
                                             <div class="tp-contact-input">
                                                <input name="old_pass" id="old_pass" type="password" minlength="6" required>
                                             </div>
                                             <div class="tp-profile-input-title">
                                                <label for="old_pass">Old Password</label>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xxl-6 col-md-6">
                                          <div class="tp-profile-input-box">
                                             <div class="tp-profile-input">
                                                <input name="new_pass" id="new_pass" type="password" minlength="6" required>
                                             </div>
                                             <div class="tp-profile-input-title">
                                                <label for="new_pass">New Password</label>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xxl-6 col-md-6">
                                          <div class="tp-profile-input-box">
                                             <div class="tp-profile-input">
                                                <input name="con_new_pass" id="con_new_pass" type="password" minlength="6" required>
                                             </div>
                                             <div class="tp-profile-input-title">
                                                <label for="con_new_pass">Confirm Password</label>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xxl-6 col-md-6">
                                          <div class="profile__btn">
                                             <button type="submit" class="tp-btn">Update</button>
                                          </div>
                                       </div>
                                    </div>
                                 <?=form_close()?>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-order" role="tabpanel" aria-labelledby="nav-order-tab">
                              <div class="profile__ticket table-responsive">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th scope="col">Order Id</th>
                                          <th scope="col">Product Title</th>
                                          <th scope="col">Status</th>
                                          <th scope="col">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($ordernya as $ord): ?>
                                       <tr>
                                          <th scope="row"> <?=esc($ord['id'])?></th>
                                          <td data-info="title"><?=esc($ord['nama_produk'])?></td>
                                          <td data-info="status hold"><?=esc($ord['status'])?></td>
                                          <td><a href="<?=site_url()?>profiles/pesanan/<?=esc($ord['id'])?>" style="border: 0.1px solid black; padding: 5px 7px;">Detail</a></td>
                                       </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-notification" role="tabpanel" aria-labelledby="nav-notification-tab">
                              <div class="profile__notification">
                                 <div class="profile__notification-top mb-30">
                                    <h3 class="profile__notification-title">My activity settings</h3>
                                    <p>Stay up to date with notification on activity that involves you including mentions, messages, replies to your bids, new items, sale and administrative updates </p>
                                 </div>
                                 <div class="profile__notification-wrapper">
                                    <div class="profile__notification-item mb-20">
                                       <div class="form-check form-switch d-flex align-items-center">
                                          <input class="form-check-input" type="checkbox" role="switch" id="like" checked>
                                          <label class="form-check-label" for="like">Like & Follows Notifications</label>
                                       </div>
                                    </div>
                                    <div class="profile__notification-item mb-20">
                                       <div class="form-check form-switch d-flex align-items-center">
                                          <input class="form-check-input" type="checkbox" role="switch" id="post" checked>
                                          <label class="form-check-label" for="post">Post, Comments & Replies Notifications</label>
                                       </div>
                                    </div>
                                    <div class="profile__notification-item mb-20">
                                       <div class="form-check form-switch d-flex align-items-center">
                                          <input class="form-check-input" type="checkbox" role="switch" id="new" checked>
                                          <label class="form-check-label" for="new">New Product Notifications</label>
                                       </div>
                                    </div>
                                    <div class="profile__notification-item mb-20">
                                       <div class="form-check form-switch d-flex align-items-center">
                                          <input class="form-check-input" type="checkbox" role="switch" id="sale" checked>
                                          <label class="form-check-label" for="sale">Product on sale Notifications</label>
                                       </div>
                                    </div>
                                    <div class="profile__notification-item mb-20">
                                       <div class="form-check form-switch d-flex align-items-center">
                                          <input class="form-check-input" type="checkbox" role="switch" id="payment" checked>
                                          <label class="form-check-label" for="payment">Payment Notifications</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
     </section>
     <!-- profile area end -->

      </main>
      

      <!-- footer area start -->
      <footer>
         <div class="tp-footer-area" data-bg-color="footer-bg-grey">
            <div class="tp-footer-top pt-95 pb-40">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-1 mb-50">
                           <div class="tp-footer-widget-content">
                              <div class="tp-footer-logo">
                                 <a href="index.html">
                                    <img src="<?=site_url()?>assets/img/logo/logo.svg" alt="logo" style="height: 70px;">
                                 </a>
                              </div>
                              <p class="tp-footer-desc">We are team of Pemrograman Web that create high quality e-commerce websites. (eaa)</p>
                              <div class="tp-footer-social">
                                 <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                 <a href="#"><i class="fa-brands fa-instagram"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-3 mb-50">
                           <h4 class="tp-footer-widget-title">Infomation</h4>
                           <div class="tp-footer-widget-content">
                              <ul>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Terms & Conditions</a></li>
                                 <li><a href="#">Contact Us</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-4 mb-50">
                           <h4 class="tp-footer-widget-title">Reach us out</h4>
                           <div class="tp-footer-widget-content">
                              <div class="tp-footer-talk mb-20">
                                 <span>Got Questions? Call us</span>
                                 <h4><a href="tel:670-413-90-762">+62-123-456-78</a></h4>
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
                                      <p><a href=""><span class="__cf_email__" data-cfemail="">halo@beliin.com</span></a></p>
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
                                       <p><a href="" target="_blank">Jempong Baru <br> Cyber City 1234</a></p>
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
                     <div class="row align-items-center text-center">
                           <div class="tp-footer-copyright">
                              <p>© 2025 All Rights Reserved  |  Zacky Raechan & Aprilio Apriziano</a>.</p>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer area end -->



      <!-- JS here -->
      <script src="<?=site_url()?>assets/js/vendor/jquery.js"></script>
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

<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:15:25 GMT -->
</html>
