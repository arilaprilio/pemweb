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
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   </head>
   <body>
      <!-- pre loader area start -->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
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
                  <div class="offcanvas__logo  logo">
                     <a href="<?=site_url()?>">
                        <img src="<?=site_url()?>assets/img/logo/logo.svg" alt="logo" style="height: 70px;">
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
                        <img src="<?=site_url()?>assets/img/icon/contact.png" alt="">
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
                     <a href="<?=site_url()?>wishlist" class="tp-mobile-item-btn">
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
                     <div class="cartmini__widget-item">
                         <div class="cartmini__thumb">
                           <a href="product-details.html">
                              <img src="<?=site_url()?>assets/img/product/product-1.jpg" alt="">
                           </a>
                         </div>
                         <div class="cartmini__content">
                           <h5 class="cartmini__title"><a href="product-details.html">Nama Produk</a></h5>
                           <div class="cartmini__price-wrapper">
                              <span class="cartmini__price">Rp 90.000</span>
                              <span class="cartmini__quantity">x2</span>
                           </div>
                         </div>
                         <a href="#" class="cartmini__del"><i class="fa-regular fa-xmark"></i></a>
                     </div>
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
                     <span>Rp 180.000</span>
                 </div>
                 <div class="cartmini__checkout-btn">
                     <a href="cart.html" class="tp-btn mb-10 w-100"> view cart</a>
                     <a href="checkout.html" class="tp-btn tp-btn-border w-100"> checkout</a>
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
                                          <img src="<?= esc($produk[0]['foto']) ?>" alt="<?= esc($produk[0]['nama']) ?>">
                                          <div class="shop-mega-menu-btn">
                                           <a href="/product/<?= esc($produk[0]['id']) ?>" class="tp-menu-showcase-btn tp-menu-showcase-btn-2"><?= esc($produk[0]['nama']) ?></a>
                                          </div>
                                         </div>
                                        </div>
                                        <div class="col-lg-3">
                                         <div class="shop-mega-menu-img">
                                          <img src="<?= esc($produk[1]['foto']) ?>" alt="<?= esc($produk[1]['nama']) ?>">
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
                                       <span class="tp-header-action-badge"><?=esc($total_wishlist)?></span>                          
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
                                       <span class="tp-header-action-badge"><?=esc($total_cart)?></span>                                                                          
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
         <section class="breadcrumb__area breadcrumb__style-2 include-bg pt-50 pb-20">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list has-icon">
                           <span class="breadcrumb-icon">
                              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.42393 16H15.5759C15.6884 16 15.7962 15.9584 15.8758 15.8844C15.9553 15.8104 16 15.71 16 15.6054V6.29143C16 6.22989 15.9846 6.1692 15.9549 6.11422C15.9252 6.05923 15.8821 6.01147 15.829 5.97475L8.75305 1.07803C8.67992 1.02736 8.59118 1 8.5 1C8.40882 1 8.32008 1.02736 8.24695 1.07803L1.17098 5.97587C1.11791 6.01259 1.0748 6.06035 1.04511 6.11534C1.01543 6.17033 0.999976 6.23101 1 6.29255V15.6063C1.00027 15.7108 1.04504 15.8109 1.12451 15.8847C1.20398 15.9585 1.31165 16 1.42393 16ZM10.1464 15.2107H6.85241V10.6202H10.1464V15.2107ZM1.84866 6.48977L8.4999 1.88561L15.1517 6.48977V15.2107H10.9946V10.2256C10.9946 10.1209 10.95 10.0206 10.8704 9.94654C10.7909 9.87254 10.683 9.83096 10.5705 9.83096H6.42848C6.316 9.83096 6.20812 9.87254 6.12858 9.94654C6.04904 10.0206 6.00435 10.1209 6.00435 10.2256V15.2107H1.84806L1.84866 6.48977Z" fill="#55585B" stroke="#55585B" stroke-width="0.5"/>
                              </svg>
                           </span>
                           <span><a href="<?=site_url()?>">Home</a></span>
                           <span><a href="#"><?=esc($product['nama_kategori'])?></a></span>
                           <span><?=esc($product['nama'])?></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->

         <!-- product details area start -->
         <section class="tp-product-details-area">
            <div class="tp-product-details-top pb-115">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-7 col-lg-6">
                        <div class="tp-product-details-thumb-wrapper tp-tab d-sm-flex">
                           <div class="tab-content m-img" id="productDetailsNavContent">
                              <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab" tabindex="0">
                                 <div class="tp-product-details-nav-main-thumb">
                                    <img src="<?=site_url()?><?=esc($product['foto'])?>" alt="">
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab" tabindex="0">
                                 <div class="tp-product-details-nav-main-thumb">
                                    <img src="<?=site_url()?>assets/img/product/details/main/product-details-main-2.jpg" alt="">
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab" tabindex="0">
                                 <div class="tp-product-details-nav-main-thumb">
                                    <img src="<?=site_url()?>assets/img/product/details/main/product-details-main-3.jpg" alt="">
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab" tabindex="0">
                                 <div class="tp-product-details-nav-main-thumb">
                                    <img src="<?=site_url()?>assets/img/product/details/main/product-details-main-4.jpg" alt="">
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-5-tab" tabindex="0">
                                 <div class="tp-product-details-nav-main-thumb">
                                    <img src="<?=site_url()?>assets/img/product/details/main/product-details-main-5.jpg" alt="">
                                 </div>
                              </div>
                            </div>
                        </div>
                     </div> <!-- col end -->
                     <div class="col-xl-5 col-lg-6">
                        <div class="tp-product-details-wrapper">
                           <div class="tp-product-details-category">
                              <span><?=esc($product['nama_kategori'])?></span>
                           </div>
                           <h3 class="tp-product-details-title"><?=esc($product['nama'])?></h3>
                           <!-- price -->
                           <div class="tp-product-details-price-wrapper mb-20">
                              <span class="tp-product-details-price old-price">Rp <?= number_format($product['harga'] * 1.1, 0, ',', '.') ?></span>
                              <span class="tp-product-details-price new-price">Rp <?= number_format($product['harga'] * 1.1, 0, ',', '.') ?></span>
                           </div>

   
                           <!-- actions -->
                           <div class="tp-product-details-action-wrapper">
                              <div class="tp-product-details-action-item-wrapper d-flex align-items-center">
                                 <div class="tp-product-details-quantity">
                                    <div class="tp-product-quantity mb-15 mr-15">
                                       <span class="tp-cart-minus">
                                          <svg width="11" height="2" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1 1H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>                                                            
                                       </span>
                                       <input class="tp-cart-input" type="text" value="1" id="quantityInput">
                                       <span class="tp-cart-plus">
                                          <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1 6H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M5.5 10.5V1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="tp-product-details-add-to-cart mb-15 w-100">
                                    <button class="tp-product-details-add-to-cart-btn w-100" data-product-id="<?= $product['id'] ?>" id="addToCart">Add To Cart</button>
                                 </div>
                              </div>
                              <button class="tp-product-details-buy-now-btn w-100" id="buyNowBtn" data-product-id="<?= $product['id'] ?>">Buy Now</button>
                           </div>
                           <div class="tp-product-details-action-sm">
                              <button type="button" class="tp-product-details-action-sm-btn" id="addToWishlist" data-product-id="<?= $product['id'] ?>">
                                 <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.33541 7.54172C3.36263 10.6766 7.42094 13.2113 8.49945 13.8387C9.58162 13.2048 13.6692 10.6421 14.6635 7.5446C15.3163 5.54239 14.7104 3.00621 12.3028 2.24514C11.1364 1.8779 9.77578 2.1014 8.83648 2.81432C8.64012 2.96237 8.36757 2.96524 8.16974 2.81863C7.17476 2.08487 5.87499 1.86999 4.69024 2.24514C2.28632 3.00549 1.68259 5.54167 2.33541 7.54172ZM8.50115 15C8.4103 15 8.32018 14.9784 8.23812 14.9346C8.00879 14.8117 2.60674 11.891 1.29011 7.87081C1.28938 7.87081 1.28938 7.8701 1.28938 7.8701C0.462913 5.33895 1.38316 2.15812 4.35418 1.21882C5.7492 0.776121 7.26952 0.97088 8.49895 1.73195C9.69029 0.993159 11.2729 0.789057 12.6401 1.21882C15.614 2.15956 16.5372 5.33966 15.7115 7.8701C14.4373 11.8443 8.99571 14.8088 8.76492 14.9332C8.68286 14.9777 8.592 15 8.50115 15Z" fill="currentColor"/>
                                    <path d="M8.49945 13.8387L8.42402 13.9683L8.49971 14.0124L8.57526 13.9681L8.49945 13.8387ZM14.6635 7.5446L14.5209 7.4981L14.5207 7.49875L14.6635 7.5446ZM12.3028 2.24514L12.348 2.10211L12.3478 2.10206L12.3028 2.24514ZM8.83648 2.81432L8.92678 2.93409L8.92717 2.9338L8.83648 2.81432ZM8.16974 2.81863L8.25906 2.69812L8.25877 2.69791L8.16974 2.81863ZM4.69024 2.24514L4.73548 2.38815L4.73552 2.38814L4.69024 2.24514ZM8.23812 14.9346L8.16727 15.0668L8.16744 15.0669L8.23812 14.9346ZM1.29011 7.87081L1.43266 7.82413L1.39882 7.72081H1.29011V7.87081ZM1.28938 7.8701L1.43938 7.87009L1.43938 7.84623L1.43197 7.82354L1.28938 7.8701ZM4.35418 1.21882L4.3994 1.36184L4.39955 1.36179L4.35418 1.21882ZM8.49895 1.73195L8.42 1.85949L8.49902 1.90841L8.57801 1.85943L8.49895 1.73195ZM12.6401 1.21882L12.6853 1.0758L12.685 1.07572L12.6401 1.21882ZM15.7115 7.8701L15.5689 7.82356L15.5686 7.8243L15.7115 7.8701ZM8.76492 14.9332L8.69378 14.8011L8.69334 14.8013L8.76492 14.9332ZM2.19287 7.58843C2.71935 9.19514 4.01596 10.6345 5.30013 11.744C6.58766 12.8564 7.88057 13.6522 8.42402 13.9683L8.57487 13.709C8.03982 13.3978 6.76432 12.6125 5.49626 11.517C4.22484 10.4185 2.97868 9.02313 2.47795 7.49501L2.19287 7.58843ZM8.57526 13.9681C9.12037 13.6488 10.4214 12.8444 11.7125 11.729C12.9999 10.6167 14.2963 9.17932 14.8063 7.59044L14.5207 7.49875C14.0364 9.00733 12.7919 10.4 11.5164 11.502C10.2446 12.6008 8.9607 13.3947 8.42364 13.7093L8.57526 13.9681ZM14.8061 7.59109C15.1419 6.5613 15.1554 5.39131 14.7711 4.37633C14.3853 3.35729 13.5989 2.49754 12.348 2.10211L12.2576 2.38816C13.4143 2.75381 14.1347 3.54267 14.4905 4.48255C14.8479 5.42648 14.8379 6.52568 14.5209 7.4981L14.8061 7.59109ZM12.3478 2.10206C11.137 1.72085 9.72549 1.95125 8.7458 2.69484L8.92717 2.9338C9.82606 2.25155 11.1357 2.03494 12.2577 2.38821L12.3478 2.10206ZM8.74618 2.69455C8.60221 2.8031 8.40275 2.80462 8.25906 2.69812L8.08043 2.93915C8.33238 3.12587 8.67804 3.12163 8.92678 2.93409L8.74618 2.69455ZM8.25877 2.69791C7.225 1.93554 5.87527 1.71256 4.64496 2.10213L4.73552 2.38814C5.87471 2.02742 7.12452 2.2342 8.08071 2.93936L8.25877 2.69791ZM4.64501 2.10212C3.39586 2.49722 2.61099 3.35688 2.22622 4.37554C1.84299 5.39014 1.85704 6.55957 2.19281 7.58826L2.478 7.49518C2.16095 6.52382 2.15046 5.42513 2.50687 4.48154C2.86175 3.542 3.58071 2.7534 4.73548 2.38815L4.64501 2.10212ZM8.50115 14.85C8.43415 14.85 8.36841 14.8341 8.3088 14.8023L8.16744 15.0669C8.27195 15.1227 8.38645 15.15 8.50115 15.15V14.85ZM8.30897 14.8024C8.19831 14.7431 6.7996 13.9873 5.26616 12.7476C3.72872 11.5046 2.07716 9.79208 1.43266 7.82413L1.14756 7.9175C1.81968 9.96978 3.52747 11.7277 5.07755 12.9809C6.63162 14.2373 8.0486 15.0032 8.16727 15.0668L8.30897 14.8024ZM1.29011 7.72081C1.31557 7.72081 1.34468 7.72745 1.37175 7.74514C1.39802 7.76231 1.41394 7.78437 1.42309 7.8023C1.43191 7.81958 1.43557 7.8351 1.43727 7.84507C1.43817 7.8504 1.43869 7.85518 1.43898 7.85922C1.43913 7.86127 1.43923 7.8632 1.43929 7.865C1.43932 7.86591 1.43934 7.86678 1.43936 7.86763C1.43936 7.86805 1.43937 7.86847 1.43937 7.86888C1.43937 7.86909 1.43937 7.86929 1.43938 7.86949C1.43938 7.86959 1.43938 7.86969 1.43938 7.86979C1.43938 7.86984 1.43938 7.86992 1.43938 7.86994C1.43938 7.87002 1.43938 7.87009 1.28938 7.8701C1.13938 7.8701 1.13938 7.87017 1.13938 7.87025C1.13938 7.87027 1.13938 7.87035 1.13938 7.8704C1.13938 7.8705 1.13938 7.8706 1.13938 7.8707C1.13938 7.8709 1.13938 7.87111 1.13938 7.87131C1.13939 7.87173 1.13939 7.87214 1.1394 7.87257C1.13941 7.87342 1.13943 7.8743 1.13946 7.8752C1.13953 7.87701 1.13962 7.87896 1.13978 7.88103C1.14007 7.88512 1.14059 7.88995 1.14151 7.89535C1.14323 7.90545 1.14694 7.92115 1.15585 7.93861C1.16508 7.95672 1.18114 7.97896 1.20762 7.99626C1.2349 8.01409 1.26428 8.02081 1.29011 8.02081V7.72081ZM1.43197 7.82354C0.623164 5.34647 1.53102 2.26869 4.3994 1.36184L4.30896 1.0758C1.23531 2.04755 0.302663 5.33142 1.14679 7.91665L1.43197 7.82354ZM4.39955 1.36179C5.7527 0.932384 7.22762 1.12136 8.42 1.85949L8.57791 1.60441C7.31141 0.820401 5.74571 0.619858 4.30881 1.07585L4.39955 1.36179ZM8.57801 1.85943C9.73213 1.14371 11.2694 0.945205 12.5951 1.36192L12.685 1.07572C11.2763 0.632908 9.64845 0.842602 8.4199 1.60447L8.57801 1.85943ZM12.5948 1.36184C15.4664 2.27018 16.3769 5.34745 15.5689 7.82356L15.8541 7.91663C16.6975 5.33188 15.7617 2.04893 12.6853 1.07581L12.5948 1.36184ZM15.5686 7.8243C14.9453 9.76841 13.2952 11.4801 11.7526 12.7288C10.2142 13.974 8.80513 14.7411 8.69378 14.8011L8.83606 15.0652C8.9555 15.0009 10.3826 14.2236 11.9413 12.9619C13.4957 11.7037 15.2034 9.94602 15.8543 7.91589L15.5686 7.8243ZM8.69334 14.8013C8.6337 14.8337 8.56752 14.85 8.50115 14.85V15.15C8.61648 15.15 8.73201 15.1217 8.83649 15.065L8.69334 14.8013Z" fill="currentColor"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8384 6.93209C12.5548 6.93209 12.3145 6.71865 12.2911 6.43693C12.2427 5.84618 11.8397 5.34743 11.266 5.1656C10.9766 5.07361 10.8184 4.76962 10.9114 4.48718C11.0059 4.20402 11.3129 4.05023 11.6031 4.13934C12.6017 4.45628 13.3014 5.32371 13.3872 6.34925C13.4113 6.64606 13.1864 6.90622 12.8838 6.92993C12.8684 6.93137 12.8538 6.93209 12.8384 6.93209Z" fill="currentColor"/>
                                    <path d="M12.8384 6.93209C12.5548 6.93209 12.3145 6.71865 12.2911 6.43693C12.2427 5.84618 11.8397 5.34743 11.266 5.1656C10.9766 5.07361 10.8184 4.76962 10.9114 4.48718C11.0059 4.20402 11.3129 4.05023 11.6031 4.13934C12.6017 4.45628 13.3014 5.32371 13.3872 6.34925C13.4113 6.64606 13.1864 6.90622 12.8838 6.92993C12.8684 6.93137 12.8538 6.93209 12.8384 6.93209" stroke="currentColor" stroke-width="0.3"/>
                                 </svg>
                                 Add Wishlist
                              </button>

                           </div>
                           <div class="tp-product-details-query">
                              <div class="tp-product-details-query-item d-flex align-items-center">
                                 <span>Category:  </span>
                                 <p><?=esc($product['nama_kategori'])?></p>
                              </div>
                           </div>
                           <div class="tp-product-details-msg mb-15">
                              <ul>
                                 <li>Garansi 30 Hari</li>
                                 <li>Order yours before 2.30pm for same day dispatch</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- product details area end -->

         <div class="modal fade tp-product-modal" id="producQuickViewModal" tabindex="-1" aria-labelledby="producQuickViewModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                  <div class="tp-product-modal-content d-lg-flex align-items-start">
                     <button type="button" class="tp-product-modal-close-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal"><i class="fa-regular fa-xmark"></i></button>
                     <div class="tp-product-details-thumb-wrapper tp-tab d-sm-flex">
                        <nav>
                           <div class="nav nav-tabs flex-sm-column " id="productDetailsNavThumb" role="tablist">
                              <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="true">
                                 <img src="assets/img/product/details/nav/product-details-nav-1.jpg" alt="">
                              </button>
                              <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="false">
                                 <img src="assets/img/product/details/nav/product-details-nav-2.jpg" alt="">
                              </button>
                              <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-3" aria-selected="false">
                                 <img src="assets/img/product/details/nav/product-details-nav-3.jpg" alt="">
                              </button>
                              <button class="nav-link" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4" type="button" role="tab" aria-controls="nav-4" aria-selected="false">
                                 <img src="assets/img/product/details/nav/product-details-nav-4.jpg" alt="">
                              </button>
                           </div>
                        </nav>
                        <div class="tab-content m-img" id="productDetailsNavContent">
                           <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab" tabindex="0">
                              <div class="tp-product-details-nav-main-thumb">
                                 <img src="assets/img/product/details/main/product-details-main-1.jpg" alt="">
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab" tabindex="0">
                              <div class="tp-product-details-nav-main-thumb">
                                 <img src="assets/img/product/details/main/product-details-main-2.jpg" alt="">
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab" tabindex="0">
                              <div class="tp-product-details-nav-main-thumb">
                                 <img src="assets/img/product/details/main/product-details-main-3.jpg" alt="">
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab" tabindex="0">
                              <div class="tp-product-details-nav-main-thumb">
                                 <img src="assets/img/product/details/main/product-details-main-4.jpg" alt="">
                              </div>
                           </div>
                         </div>
                     </div>
                     <div class="tp-product-details-wrapper">
                        <div class="tp-product-details-category">
                           <span>Computers & Tablets</span>
                        </div>
                        <h3 class="tp-product-details-title">Nama Produknya Disini</h3>
   
                        <!-- inventory details -->
                        <div class="tp-product-details-inventory d-flex align-items-center mb-10">
                           <div class="tp-product-details-stock mb-10">
                              <span>In Stock</span>
                           </div>
                           <div class="tp-product-details-rating-wrapper d-flex align-items-center mb-10">
                              <div class="tp-product-details-rating">
                                 <span><i class="fa-solid fa-star"></i></span>
                                 <span><i class="fa-solid fa-star"></i></span>
                                 <span><i class="fa-solid fa-star"></i></span>
                                 <span><i class="fa-solid fa-star"></i></span>
                                 <span><i class="fa-solid fa-star"></i></span>
                              </div>
                              <div class="tp-product-details-reviews">
                                 <span>(36 Reviews)</span>
                              </div>
                           </div>
                        </div>
                        <p>A Screen Everyone Will Love: Whether your family is streaming or video chatting with friends tablet A8... <span>See more</span></p>
   
                        <!-- price -->
                        <div class="tp-product-details-price-wrapper mb-20">
                           <span class="tp-product-details-price old-price">$320.00</span>
                           <span class="tp-product-details-price new-price">$236.00</span>
                        </div>
   
                        <!-- variations -->
                        <div class="tp-product-details-variation">
                           <!-- single item -->
                           <div class="tp-product-details-variation-item">
                              <h4 class="tp-product-details-variation-title">Color :</h4>
                              <div class="tp-product-details-variation-list">
                                 <button type="button" class="color tp-color-variation-btn" >
                                    <span data-bg-color="#F8B655"></span>
                                    <span class="tp-color-variation-tootltip">Yellow</span>
                                 </button>
                                 <button type="button" class="color tp-color-variation-btn active" >
                                    <span data-bg-color="#CBCBCB"></span>
                                    <span class="tp-color-variation-tootltip">Gray</span>
                                 </button>
                                 <button type="button" class="color tp-color-variation-btn" >
                                    <span data-bg-color="#494E52"></span>
                                    <span class="tp-color-variation-tootltip">Black</span>
                                 </button>
                                 <button type="button" class="color tp-color-variation-btn" >
                                    <span data-bg-color="#B4505A"></span>
                                    <span class="tp-color-variation-tootltip">Brown</span>
                                 </button>
                              </div>
                           </div>
                        </div>
   
                        <!-- actions -->
                        <div class="tp-product-details-action-wrapper">
                           <h3 class="tp-product-details-action-title">Quantity</h3>
                           <div class="tp-product-details-action-item-wrapper d-sm-flex align-items-center">
                              <div class="tp-product-details-quantity">
                                 <div class="tp-product-quantity mb-15 mr-15">
                                    <span class="tp-cart-minus">
                                       <svg width="11" height="2" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 1H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>                                                            
                                    </span>
                                    <input class="tp-cart-input" type="text" value="1">
                                    <span class="tp-cart-plus">
                                       <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 6H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M5.5 10.5V1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </span>
                                 </div>
                              </div>
                              <div class="tp-product-details-add-to-cart mb-15 w-100">
                                 <button class="tp-product-details-add-to-cart-btn w-100">Add To Cart</button>
                              </div>
                           </div>
                           <button class="tp-product-details-buy-now-btn w-100">Buy Now</button>
                        </div>
                        <div class="tp-product-details-action-sm">
                           <button type="button" class="tp-product-details-action-sm-btn">
                              <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M2.33541 7.54172C3.36263 10.6766 7.42094 13.2113 8.49945 13.8387C9.58162 13.2048 13.6692 10.6421 14.6635 7.5446C15.3163 5.54239 14.7104 3.00621 12.3028 2.24514C11.1364 1.8779 9.77578 2.1014 8.83648 2.81432C8.64012 2.96237 8.36757 2.96524 8.16974 2.81863C7.17476 2.08487 5.87499 1.86999 4.69024 2.24514C2.28632 3.00549 1.68259 5.54167 2.33541 7.54172ZM8.50115 15C8.4103 15 8.32018 14.9784 8.23812 14.9346C8.00879 14.8117 2.60674 11.891 1.29011 7.87081C1.28938 7.87081 1.28938 7.8701 1.28938 7.8701C0.462913 5.33895 1.38316 2.15812 4.35418 1.21882C5.7492 0.776121 7.26952 0.97088 8.49895 1.73195C9.69029 0.993159 11.2729 0.789057 12.6401 1.21882C15.614 2.15956 16.5372 5.33966 15.7115 7.8701C14.4373 11.8443 8.99571 14.8088 8.76492 14.9332C8.68286 14.9777 8.592 15 8.50115 15Z" fill="currentColor"/>
                                 <path d="M8.49945 13.8387L8.42402 13.9683L8.49971 14.0124L8.57526 13.9681L8.49945 13.8387ZM14.6635 7.5446L14.5209 7.4981L14.5207 7.49875L14.6635 7.5446ZM12.3028 2.24514L12.348 2.10211L12.3478 2.10206L12.3028 2.24514ZM8.83648 2.81432L8.92678 2.93409L8.92717 2.9338L8.83648 2.81432ZM8.16974 2.81863L8.25906 2.69812L8.25877 2.69791L8.16974 2.81863ZM4.69024 2.24514L4.73548 2.38815L4.73552 2.38814L4.69024 2.24514ZM8.23812 14.9346L8.16727 15.0668L8.16744 15.0669L8.23812 14.9346ZM1.29011 7.87081L1.43266 7.82413L1.39882 7.72081H1.29011V7.87081ZM1.28938 7.8701L1.43938 7.87009L1.43938 7.84623L1.43197 7.82354L1.28938 7.8701ZM4.35418 1.21882L4.3994 1.36184L4.39955 1.36179L4.35418 1.21882ZM8.49895 1.73195L8.42 1.85949L8.49902 1.90841L8.57801 1.85943L8.49895 1.73195ZM12.6401 1.21882L12.6853 1.0758L12.685 1.07572L12.6401 1.21882ZM15.7115 7.8701L15.5689 7.82356L15.5686 7.8243L15.7115 7.8701ZM8.76492 14.9332L8.69378 14.8011L8.69334 14.8013L8.76492 14.9332ZM2.19287 7.58843C2.71935 9.19514 4.01596 10.6345 5.30013 11.744C6.58766 12.8564 7.88057 13.6522 8.42402 13.9683L8.57487 13.709C8.03982 13.3978 6.76432 12.6125 5.49626 11.517C4.22484 10.4185 2.97868 9.02313 2.47795 7.49501L2.19287 7.58843ZM8.57526 13.9681C9.12037 13.6488 10.4214 12.8444 11.7125 11.729C12.9999 10.6167 14.2963 9.17932 14.8063 7.59044L14.5207 7.49875C14.0364 9.00733 12.7919 10.4 11.5164 11.502C10.2446 12.6008 8.9607 13.3947 8.42364 13.7093L8.57526 13.9681ZM14.8061 7.59109C15.1419 6.5613 15.1554 5.39131 14.7711 4.37633C14.3853 3.35729 13.5989 2.49754 12.348 2.10211L12.2576 2.38816C13.4143 2.75381 14.1347 3.54267 14.4905 4.48255C14.8479 5.42648 14.8379 6.52568 14.5209 7.4981L14.8061 7.59109ZM12.3478 2.10206C11.137 1.72085 9.72549 1.95125 8.7458 2.69484L8.92717 2.9338C9.82606 2.25155 11.1357 2.03494 12.2577 2.38821L12.3478 2.10206ZM8.74618 2.69455C8.60221 2.8031 8.40275 2.80462 8.25906 2.69812L8.08043 2.93915C8.33238 3.12587 8.67804 3.12163 8.92678 2.93409L8.74618 2.69455ZM8.25877 2.69791C7.225 1.93554 5.87527 1.71256 4.64496 2.10213L4.73552 2.38814C5.87471 2.02742 7.12452 2.2342 8.08071 2.93936L8.25877 2.69791ZM4.64501 2.10212C3.39586 2.49722 2.61099 3.35688 2.22622 4.37554C1.84299 5.39014 1.85704 6.55957 2.19281 7.58826L2.478 7.49518C2.16095 6.52382 2.15046 5.42513 2.50687 4.48154C2.86175 3.542 3.58071 2.7534 4.73548 2.38815L4.64501 2.10212ZM8.50115 14.85C8.43415 14.85 8.36841 14.8341 8.3088 14.8023L8.16744 15.0669C8.27195 15.1227 8.38645 15.15 8.50115 15.15V14.85ZM8.30897 14.8024C8.19831 14.7431 6.7996 13.9873 5.26616 12.7476C3.72872 11.5046 2.07716 9.79208 1.43266 7.82413L1.14756 7.9175C1.81968 9.96978 3.52747 11.7277 5.07755 12.9809C6.63162 14.2373 8.0486 15.0032 8.16727 15.0668L8.30897 14.8024ZM1.29011 7.72081C1.31557 7.72081 1.34468 7.72745 1.37175 7.74514C1.39802 7.76231 1.41394 7.78437 1.42309 7.8023C1.43191 7.81958 1.43557 7.8351 1.43727 7.84507C1.43817 7.8504 1.43869 7.85518 1.43898 7.85922C1.43913 7.86127 1.43923 7.8632 1.43929 7.865C1.43932 7.86591 1.43934 7.86678 1.43936 7.86763C1.43936 7.86805 1.43937 7.86847 1.43937 7.86888C1.43937 7.86909 1.43937 7.86929 1.43938 7.86949C1.43938 7.86959 1.43938 7.86969 1.43938 7.86979C1.43938 7.86984 1.43938 7.86992 1.43938 7.86994C1.43938 7.87002 1.43938 7.87009 1.28938 7.8701C1.13938 7.8701 1.13938 7.87017 1.13938 7.87025C1.13938 7.87027 1.13938 7.87035 1.13938 7.8704C1.13938 7.8705 1.13938 7.8706 1.13938 7.8707C1.13938 7.8709 1.13938 7.87111 1.13938 7.87131C1.13939 7.87173 1.13939 7.87214 1.1394 7.87257C1.13941 7.87342 1.13943 7.8743 1.13946 7.8752C1.13953 7.87701 1.13962 7.87896 1.13978 7.88103C1.14007 7.88512 1.14059 7.88995 1.14151 7.89535C1.14323 7.90545 1.14694 7.92115 1.15585 7.93861C1.16508 7.95672 1.18114 7.97896 1.20762 7.99626C1.2349 8.01409 1.26428 8.02081 1.29011 8.02081V7.72081ZM1.43197 7.82354C0.623164 5.34647 1.53102 2.26869 4.3994 1.36184L4.30896 1.0758C1.23531 2.04755 0.302663 5.33142 1.14679 7.91665L1.43197 7.82354ZM4.39955 1.36179C5.7527 0.932384 7.22762 1.12136 8.42 1.85949L8.57791 1.60441C7.31141 0.820401 5.74571 0.619858 4.30881 1.07585L4.39955 1.36179ZM8.57801 1.85943C9.73213 1.14371 11.2694 0.945205 12.5951 1.36192L12.685 1.07572C11.2763 0.632908 9.64845 0.842602 8.4199 1.60447L8.57801 1.85943ZM12.5948 1.36184C15.4664 2.27018 16.3769 5.34745 15.5689 7.82356L15.8541 7.91663C16.6975 5.33188 15.7617 2.04893 12.6853 1.07581L12.5948 1.36184ZM15.5686 7.8243C14.9453 9.76841 13.2952 11.4801 11.7526 12.7288C10.2142 13.974 8.80513 14.7411 8.69378 14.8011L8.83606 15.0652C8.9555 15.0009 10.3826 14.2236 11.9413 12.9619C13.4957 11.7037 15.2034 9.94602 15.8543 7.91589L15.5686 7.8243ZM8.69334 14.8013C8.6337 14.8337 8.56752 14.85 8.50115 14.85V15.15C8.61648 15.15 8.73201 15.1217 8.83649 15.065L8.69334 14.8013Z" fill="currentColor"/>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8384 6.93209C12.5548 6.93209 12.3145 6.71865 12.2911 6.43693C12.2427 5.84618 11.8397 5.34743 11.266 5.1656C10.9766 5.07361 10.8184 4.76962 10.9114 4.48718C11.0059 4.20402 11.3129 4.05023 11.6031 4.13934C12.6017 4.45628 13.3014 5.32371 13.3872 6.34925C13.4113 6.64606 13.1864 6.90622 12.8838 6.92993C12.8684 6.93137 12.8538 6.93209 12.8384 6.93209Z" fill="currentColor"/>
                                 <path d="M12.8384 6.93209C12.5548 6.93209 12.3145 6.71865 12.2911 6.43693C12.2427 5.84618 11.8397 5.34743 11.266 5.1656C10.9766 5.07361 10.8184 4.76962 10.9114 4.48718C11.0059 4.20402 11.3129 4.05023 11.6031 4.13934C12.6017 4.45628 13.3014 5.32371 13.3872 6.34925C13.4113 6.64606 13.1864 6.90622 12.8838 6.92993C12.8684 6.93137 12.8538 6.93209 12.8384 6.93209" stroke="currentColor" stroke-width="0.3"/>
                              </svg>
                              Add Wishlist
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

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
                                 <a href="<?=site_url()?>">
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
      <script>
         const isLogged = <?= session()->has('user') ? 'true' : 'false' ?>;
         const toast = (icon, title, text) =>
            Swal.fire({ icon, title, text });

         document.addEventListener('DOMContentLoaded', () => {
            if (!isLogged) {
               document.querySelectorAll('.tp-product-details-add-to-cart-btn, .tp-product-add-cart-btn-large')
                  .forEach(btn =>
                     btn.addEventListener('click', e => {
                        e.preventDefault();
                        toast('warning', 'Pemberitahuan', 'Anda harus login terlebih dahulu untuk memasukkan produk ke cart');
                     })
                  );
               document.querySelectorAll('.tp-product-details-action-sm-btn, .tp-product-action-btn-3.tp-product-add-to-wishlist-btn')
                  .forEach(btn =>
                     btn.addEventListener('click', e => {
                        e.preventDefault();
                        toast('warning', 'Pemberitahuan', 'Anda harus login terlebih dahulu untuk memasukkan produk ke wishlist');
                     })
                  );
               return;
            }

            async function postJSON(url, body) {
               try {
                  const res = await fetch(url, {
                     method: 'POST',
                     headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                     },
                     body: JSON.stringify(body)
                  });
                  if (res.status === 401) {
                     return toast('warning', 'Oops', 'Anda harus login terlebih dahulu');
                  }
                  if (!res.ok) {
                     const err = await res.json();
                     return toast('error', 'Error', err.error || 'Terjadi kesalahan');
                  }
                  return res.json();
               } catch {
                  return toast('error', 'Error', 'Terjadi kesalahan jaringan');
               }
            }

            const cartBtn = document.getElementById('addToCart');
            if (cartBtn) {
               cartBtn.addEventListener('click', async e => {
                  e.preventDefault();
                  const qty = parseInt(document.getElementById('quantityInput').value) || 1;
                  await postJSON('<?= site_url('api/addCart') ?>', {
                     product_id: cartBtn.dataset.productId,
                     qty
                  });
                  toast('success', 'Berhasil', 'Produk ditambahkan ke cart');
               });
            }

            const wishBtn = document.getElementById('addToWishlist');
            if (wishBtn) {
               wishBtn.addEventListener('click', async e => {
                  e.preventDefault();
                  await postJSON('<?= site_url('api/addWishlist') ?>', {
                     product_id: wishBtn.dataset.productId
                  });
                  toast('success', 'Berhasil', 'Produk ditambahkan ke wishlist');
               });
            }

            const buyBtn = document.getElementById('buyNowBtn');
            if (buyBtn) {
               buyBtn.addEventListener('click', async e => {
                  e.preventDefault();
                  const qty = parseInt(document.getElementById('quantityInput').value) || 1;
                  const pid = buyBtn.dataset.productId;
                  window.location.href = `<?= site_url('checkout') ?>?pid=${pid}&qty=${qty}`;
               });
            }
         });
      </script>
   </body>

</html>
