<!doctype html>
<html class="no-js" lang="zxx">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Beliin. Tempatnya Harga Hemat</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="shortcut icon" type="image/x-icon" href="/assets/img/logo/favicon.png">

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
   </head>
   <body>

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

         <!-- breadcrumb area start -->
         <section class="breadcrumb__area include-bg pt-95 pb-90">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Lacak Pesanan Anda</h3>
                        <div class="breadcrumb__list">
                           <span><a href="#">Home</a></span>
                           <span>Lacak Pesanan</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->

         <!-- order area start -->
         <section class="tp-order-area pb-160">
            <div class="container">
               <div class="tp-order-inner">
                  <div class="row gx-0">
                     <div class="col-lg-6">
                        <div class="tp-order-details" data-bg-color="#0217EA">
                           <div class="tp-order-details-top text-center mb-70">
                              <div class="tp-order-details-icon">
                                 <span>
                                    <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M46 26V51H6V26" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M51 13.5H1V26H51V13.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M26 51V13.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M26 13.5H14.75C13.0924 13.5 11.5027 12.8415 10.3306 11.6694C9.15848 10.4973 8.5 8.9076 8.5 7.25C8.5 5.5924 9.15848 4.00269 10.3306 2.83058C11.5027 1.65848 13.0924 1 14.75 1C23.5 1 26 13.5 26 13.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M26 13.5H37.25C38.9076 13.5 40.4973 12.8415 41.6694 11.6694C42.8415 10.4973 43.5 8.9076 43.5 7.25C43.5 5.5924 42.8415 4.00269 41.6694 2.83058C40.4973 1.65848 38.9076 1 37.25 1C28.5 1 26 13.5 26 13.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                 </span>
                              </div>
                              <div class="tp-order-details-content">
                                 <h3 class="tp-order-details-title">Pesanan Anda Dikonfirmasi</h3>
                                 <p>Kami akan mengirimkan email konfirmasi pengiriman kepada Anda segera<br> setelah pesanan Anda dikirim</p>
                              </div>
                           </div>
                           <div class="tp-order-details-item-wrapper">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="tp-order-details-item">
                                       <h4>Tanggal Pemesanan:</h4>
                                       <p><?=esc($ordernya[0]['created_at'])?></p>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="tp-order-details-item">
                                       <h4>Perkiraan Pengiriman :</h4>
                                       <p><?= (new \DateTime(esc($ordernya[0]['created_at'])))->modify('+3 days')->format('Y-m-d H:i:s') ?></p>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="tp-order-details-item">
                                       <h4>Nomor Pemesanan : </h4>
                                       <p>#<?=esc($ordernya[0]['order_id'])?></p>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="tp-order-details-item">
                                       <h4>Metode Pembayaran : </h4>
                                       <p>Cash on Delivery (COD)</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="tp-order-info-wrapper">
                           <h4 class="tp-order-info-title">Order Details</h4>
   
                           <div class="tp-order-info-list">
                              <ul>

                                 <!-- header -->
                                 <li class="tp-order-info-list-header">
                                    <h4><b>Produk</b></h4>
                                    <h4><b>Total</b></h4>
                                 </li>

                                 <!-- item list -->
                              <?php foreach ($ordernya as $order): ?>
                                 <li class="tp-order-info-list-desc">
                                    <p><?=esc($order['nama_produk'])?><span> x <?=esc($order['jumlah'] ?: 1)?></span></p>
                                    <span>Rp <?= number_format($order['harga'] * $order['jumlah'], 0, ',', '.') ?></span>
                                 </li>
                              <?php endforeach; ?>

                                 <!-- subtotal -->
                                 <li class="tp-order-info-list-subtotal">
                                    <span><b>Subtotal</b></span>
                                    <span>Rp <?= number_format($ordernya[0]['total'], 0, ',', '.') ?></span>
                                 </li>

                                 <!-- shipping -->
                              <!-- shipping -->
                              <li class="tp-order-info-list-shipping">
                                 <span>Shipping</span>
                                 <div class="tp-order-info-list-shipping-item d-flex flex-column align-items-end">
                                    <span>
                                       <b>Kargo: <span style="font-weight: 500;">Rp 50.000</span></b> <!-- Bisa jadiin freeshipping aja kalo gamau ribet-->
                                    </span>
                                 </div>
                              </li>

                                 <!-- total -->
                                 <li class="tp-order-info-list-total">
                                    <span>Total</span>
                                    <span>Rp <?= number_format($ordernya[0]['total'] + 50000, 0, ',', '.') ?></span>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- order area end -->

      </main>
      

      <!-- footer area start -->
      <?=view("footer")?>
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
   </body>

</html>
