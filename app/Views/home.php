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
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <link rel="stylesheet" href="assets/css/animate.css">
      <link rel="stylesheet" href="assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
      <link rel="stylesheet" href="assets/css/flaticon_shofy.css">
      <link rel="stylesheet" href="assets/css/spacing.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                     <img src="assets/img/logo/preloader/preloader-icon.svg" alt="">
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
      <div class="offcanvas__area offcanvas__radius">
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
                     <a href="<?=site_url()?>">
                        <img src="assets/img/logo/logo.svg" alt="logo" style="height: 70px;">
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
               <div class="tp-main-menu-mobile fix d-lg-none mb-40"></div>

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
                  <a href="/contact" class="tp-btn-2 tp-btn-border-2">Contact Us</a>
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
                     <a href="#" class="tp-mobile-item-btn">
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
                     <a href="<?=site_url()?>profiles" class="tp-mobile-item-btn">
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
         <div class="tp-header-area p-relative z-index-11">


            <!-- header main start -->
            <div class="tp-header-main tp-header-sticky">
               <div class="container">
                  <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                        <div class="logo">
                           <a href="<?=site_url()?>">
                              <img src="assets/img/logo/logo.svg" alt="logo" style="height: 70px;">
                           </a>
                        </div>
                     </div>

                     <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                        <div class="tp-header-search pl-70">
                           <form action="#" >
                              <div class="tp-header-search-wrapper d-flex align-items-center">
                                 <div class="tp-header-search-box" style="border-radius: 100px;" >
                                    <input 
                                       type="text" 
                                       placeholder="Search for Products...">
                                 </div>
                                  <div class="tp-header-search-category">
                                    <select>
                                       <option>Select Category</option>
                                       <?php foreach ($kategori as $kat): ?>
                                         <option><?= esc($kat['nama']) ?></option>
                                       <?php endforeach; ?>
                                    </select>
                                  </div>
                                 <div class="tp-header-search-btn">
                                    <button type="submit">
                                       <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M19 19L14.65 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>                                          
                                    </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>

                     
                     <div class="col-xl-4 col-lg-3 col-md-8 col-6">
                        <div class="tp-header-main-right d-flex align-items-center justify-content-end">
                           <div class="tp-header-login d-none d-lg-block">
                              <a href="<?=site_url()?>auth/login" class="d-flex align-items-center">
                                 <div class="tp-header-login-icon">
                                    <span>
                                       <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <circle cx="8.57894" cy="5.77803" r="4.77803" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00002 17.2014C0.998732 16.8655 1.07385 16.5337 1.2197 16.2311C1.67736 15.3158 2.96798 14.8307 4.03892 14.611C4.81128 14.4462 5.59431 14.336 6.38217 14.2815C7.84084 14.1533 9.30793 14.1533 10.7666 14.2815C11.5544 14.3367 12.3374 14.4468 13.1099 14.611C14.1808 14.8307 15.4714 15.27 15.9291 16.2311C16.2224 16.8479 16.2224 17.564 15.9291 18.1808C15.4714 19.1419 14.1808 19.5812 13.1099 19.7918C12.3384 19.9634 11.5551 20.0766 10.7666 20.1304C9.57937 20.2311 8.38659 20.2494 7.19681 20.1854C6.92221 20.1854 6.65677 20.1854 6.38217 20.1304C5.59663 20.0773 4.81632 19.9641 4.04807 19.7918C2.96798 19.5812 1.68652 19.1419 1.2197 18.1808C1.0746 17.8747 0.999552 17.5401 1.00002 17.2014Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>                                       
                                    </span>
                                 </div>
                                 <?php if (isset($user['logged_in']) && $user['logged_in'] === true): ?>
                                    <div class="tp-header-login-content d-none d-xl-block">
                                       <span>Hello, <?= esc($user['nama']) ?></span>
                                       <h5 class="tp-header-login-title">Your Account</h5>
                                    </div>
                                 <?php else: ?>
                                    <div class="tp-header-login-content d-none d-xl-block">
                                       <span>Hello, Sign In</span>
                                       <h5 class="tp-header-login-title">Your Account</h5>
                                    </div>
                                 <?php endif; ?>
                              </a>
                           </div>
                           <div class="tp-header-action d-flex align-items-center ml-50">
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
                                 <button type="button" class="tp-header-action-btn cartmini-open-btn">
                                    <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M6.48626 20.5H14.8341C17.9004 20.5 20.2528 19.3924 19.5847 14.9348L18.8066 8.89359C18.3947 6.66934 16.976 5.81808 15.7311 5.81808H5.55262C4.28946 5.81808 2.95308 6.73341 2.4771 8.89359L1.69907 14.9348C1.13157 18.889 3.4199 20.5 6.48626 20.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M6.34902 5.5984C6.34902 3.21232 8.28331 1.27803 10.6694 1.27803V1.27803C11.8184 1.27316 12.922 1.72619 13.7362 2.53695C14.5504 3.3477 15.0081 4.44939 15.0081 5.5984V5.5984" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M7.70365 10.1018H7.74942" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M13.5343 10.1018H13.5801" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>    
                                    <span class="tp-header-action-badge"><?= esc($total_cart ?? 0) ?></span>                                                                          
                                 </button>
                              </div>
                              <div class="tp-header-action-item d-lg-none">
                                 <button type="button" class="tp-header-action-btn tp-offcanvas-open-btn">
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

            <!-- header bottom start -->
            <div class="tp-header-bottom tp-header-bottom-border d-none d-lg-block">
               <div class="container">
                  <div class="tp-mega-menu-wrapper p-relative">
                     <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                           <div class="main-menu menu-style-1">
                              <nav class="tp-main-menu-content">
                                 <ul>
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
                                                   <li><a href="/product/<?= esc($order['produk_id']) ?>"><?= esc($order['nama_produk']) ?></a></li>
                                                <?php endforeach; ?>
                                              </ul>
                                            </li>
                                            <!-- third col -->
                                            <li class="has-dropdown">
                                              <a href="#" class="mega-menu-title">Products</a>
                                              <ul class="tp-submenu">
                                                <?php foreach (array_slice($produk, 0, 7) as $prod): ?>
                                                   <li><a href="/product/<?= esc($prod['id']) ?>"><?= esc($prod['nama']) ?></a></li>
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
                        <div class="col-xl-3 col-lg-3">
                           <div class="tp-header-contact d-flex align-items-center justify-content-end">
                              <div class="tp-header-contact-icon">
                                 <span>
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M1.96977 3.24859C2.26945 2.75144 3.92158 0.946726 5.09889 1.00121C5.45111 1.03137 5.76246 1.24346 6.01544 1.49057H6.01641C6.59631 2.05874 8.26011 4.203 8.35352 4.65442C8.58411 5.76158 7.26378 6.39979 7.66756 7.5157C8.69698 10.0345 10.4707 11.8081 12.9908 12.8365C14.1058 13.2412 14.7441 11.9219 15.8513 12.1515C16.3028 12.2459 18.4482 13.9086 19.0155 14.4894V14.4894C19.2616 14.7414 19.4757 15.0537 19.5049 15.4059C19.5487 16.6463 17.6319 18.3207 17.2583 18.5347C16.3767 19.1661 15.2267 19.1544 13.8246 18.5026C9.91224 16.8749 3.65985 10.7408 2.00188 6.68096C1.3675 5.2868 1.32469 4.12906 1.96977 3.24859Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M12.936 1.23685C16.4432 1.62622 19.2124 4.39253 19.6065 7.89874" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M12.936 4.59337C14.6129 4.92021 15.9231 6.23042 16.2499 7.90726" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                    
                                 </span>
                              </div>
                              <div class="tp-header-contact-content">
                                 <h5>Hotline:</h5>
                                 <p><a href="tel:402-763-282-46">+(62) 123 456 789</a></p>
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
         <!-- slider area start -->
         <section class="tp-slider-area p-relative z-index-1">
            <div class="tp-slider-active tp-slider-variation swiper-container">
               <div class="swiper-wrapper">
                  <?php foreach ($banner as $item): ?>
                     <div class="tp-slider-item tp-slider-height d-flex align-items-center swiper-slide green-dark-bg">
                        <div class="tp-slider-shape">
                           <img class="tp-slider-shape-1" src="assets/img/slider/shape/slider-shape-1.png" alt="slider-shape">
                           <img class="tp-slider-shape-2" src="assets/img/slider/shape/slider-shape-2.png" alt="slider-shape">
                           <img class="tp-slider-shape-3" src="assets/img/slider/shape/slider-shape-3.png" alt="slider-shape">
                           <img class="tp-slider-shape-4" src="assets/img/slider/shape/slider-shape-4.png" alt="slider-shape">
                        </div>
                        <div class="container">
                           <div class="row align-items-center">
                              <div class="col-xl-5 col-lg-6 col-md-6">
                                 <div class="tp-slider-content p-relative z-index-1">
                                    <span>Starting at <b>Rp <?= number_format($item['harga_produk'], 0, ',', '.') ?></b></span>
                                    <h3 class="tp-slider-title"><?= esc($item['nama_produk']) ?></h3>
                                    <p>Category: <?= esc($item['nama_kategori']) ?></p>
                                    <div class="tp-slider-btn">
                                       <a href="<?= site_url('product/' . esc($item['produk_id'])) ?>" class="tp-btn tp-btn-2 tp-btn-white">Shop Now
                                          <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-7 col-lg-6 col-md-6">
                                 <div class="tp-slider-thumb text-end">
                                    <img src="<?= esc($item['foto_produk']) ?>" alt="<?= esc($item['nama_produk']) ?>">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php endforeach; ?>
               </div>
               <div class="tp-slider-arrow tp-swiper-arrow d-none d-lg-block">
                  <button type="button" class="tp-slider-button-prev">
                     <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     </svg>                        
                  </button>
                  <button type="button" class="tp-slider-button-next">
                     <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     </svg>                        
                  </button>
               </div>
               <div class="tp-slider-dot tp-swiper-dot"></div>
            </div>
         </section>

         <!-- Category Area -->
         <section class="tp-product-category pt-60 pb-15">
         <div class="container">
            <div class="row row-cols-xl-5 row-cols-lg-5 row-cols-md-4">

               <?php
               foreach ($kategori as $no => $kat) {
               $w = ["warning", "success", "primary", "danger", "info"][$no + 1 - 1] ?? "warning";
               ?>
               <!-- Kerajinan Tangan -->
               <div class="col">
                  <div class="tp-product-category-item text-center mb-40 bg-<?=$w?> bg-opacity-25 p-3 rounded">
                     <div class="tp-product-category-thumb fix"></div>
                     <div class="tp-product-category-content">
                        <h3 class="tp-product-category-title">
                           <a href="<?=site_url()?>category/<?=esc($kat['id'])?>" class="text-warning"><?=$kat['nama']?></a>
                        </h3>
                        <p class="text-muted"><?=$kat['total_produk']?> Produk</p>
                     </div>
                  </div>
               </div>
               <?php
               }
               ?>
            </div>
         </div>
         </section>

         <!-- feature area start -->
         <section class="tp-feature-area tp-feature-border-radius pb-70">
            <div class="container">
               <div class="row gx-1 gy-1 gy-xl-0">
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                     <div class="tp-feature-item d-flex align-items-start">
                        <div class="tp-feature-icon mr-15">
                           <span>
                              <svg width="33" height="27" viewBox="0 0 33 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.7222 1H31.5555V19.0556H10.7222V1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M10.7222 7.94446H5.16667L1.00001 12.1111V19.0556H10.7222V7.94446Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M25.3055 26C23.3879 26 21.8333 24.4454 21.8333 22.5278C21.8333 20.6101 23.3879 19.0555 25.3055 19.0555C27.2232 19.0555 28.7778 20.6101 28.7778 22.5278C28.7778 24.4454 27.2232 26 25.3055 26Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M7.25001 26C5.33235 26 3.77778 24.4454 3.77778 22.5278C3.77778 20.6101 5.33235 19.0555 7.25001 19.0555C9.16766 19.0555 10.7222 20.6101 10.7222 22.5278C10.7222 24.4454 9.16766 26 7.25001 26Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                                                        
                           </span>
                        </div>
                        <div class="tp-feature-content">
                           <h3 class="tp-feature-title">Free Delivery</h3>
                           <p>Orders from all item</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                     <div class="tp-feature-item d-flex align-items-start">
                        <div class="tp-feature-icon mr-15">
                           <span>
                              <svg width="21" height="35" viewBox="0 0 21 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.3636 1V34" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M17.8636 7H6.61365C5.22126 7 3.8859 7.55312 2.90134 8.53769C1.91677 9.52226 1.36365 10.8576 1.36365 12.25C1.36365 13.6424 1.91677 14.9777 2.90134 15.9623C3.8859 16.9469 5.22126 17.5 6.61365 17.5H14.1136C15.506 17.5 16.8414 18.0531 17.826 19.0377C18.8105 20.0223 19.3636 21.3576 19.3636 22.75C19.3636 24.1424 18.8105 25.4777 17.826 26.4623C16.8414 27.4469 15.506 28 14.1136 28H1.36365" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                                                        
                           </span>
                        </div>
                        <div class="tp-feature-content">
                           <h3 class="tp-feature-title">Return & Refund</h3>
                           <p>Maney back guarantee</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                     <div class="tp-feature-item d-flex align-items-start">
                        <div class="tp-feature-icon mr-15">
                           <span>
                              <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <mask id="mask0_1211_583" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="31" height="30">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H30.0024V29.9998H0V0Z" fill="white"/>
                                 </mask>
                                 <g mask="url(#mask0_1211_583)">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4168 27.1116C14.3017 27.9756 15.7266 27.9651 16.6056 27.0816L17.6885 26.0017C18.5285 25.1632 19.6894 24.6848 20.8728 24.6848H22.4178C23.6687 24.6848 24.6856 23.6678 24.6856 22.4184V20.875C24.6856 19.6736 25.1506 18.5441 25.9995 17.6937L27.0795 16.6122C27.519 16.1713 27.7544 15.5998 27.7529 14.9938C27.7514 14.3894 27.513 13.8209 27.0825 13.3919L26.001 12.309C25.1506 11.4525 24.6856 10.3246 24.6856 9.12318V7.58277C24.6856 6.33184 23.6687 5.3149 22.4178 5.3149H20.8758C19.6744 5.3149 18.545 4.84842 17.6945 4.00397L16.6116 2.91954C15.7101 2.02709 14.2717 2.03159 13.3913 2.91804L12.3128 3.99947C11.4519 4.84992 10.3225 5.3149 9.12553 5.3149H7.58212C6.33269 5.3164 5.31575 6.33334 5.31575 7.58277V9.12018C5.31575 10.3216 4.84927 11.451 4.00332 12.303L2.93839 13.3694C2.92789 13.3814 2.91739 13.3904 2.90689 13.4009C2.02644 14.2874 2.03094 15.7258 2.91739 16.6062L4.00032 17.6892C4.84927 18.5411 5.31575 19.6706 5.31575 20.872V22.4184C5.31575 23.6678 6.33119 24.6848 7.58212 24.6848H9.12253C10.3255 24.6863 11.4549 25.1527 12.3053 26.0002L13.3868 27.0786C13.3958 27.0891 13.4063 27.0996 13.4168 27.1116ZM14.9972 30.0002C13.8468 30.0002 12.6963 29.5652 11.8159 28.6923C11.8039 28.6803 11.7919 28.6683 11.7799 28.6548L10.715 27.5914C10.2905 27.1699 9.72352 26.9359 9.12055 26.9344H7.58164C5.09029 26.9344 3.06541 24.908 3.06541 22.4182V20.8717C3.06541 20.2688 2.82992 19.7033 2.40694 19.2773L1.32851 18.2004C-0.423392 16.4575 -0.444391 13.6197 1.27601 11.8498C1.28951 11.8363 1.30301 11.8228 1.31651 11.8093L2.40844 10.7143C2.82992 10.2899 3.06541 9.72139 3.06541 9.11993V7.58252C3.06541 5.09266 5.09029 3.06628 7.58014 3.06478H9.12505C9.72652 3.06478 10.2935 2.82929 10.724 2.40482L11.7964 1.32938C13.5498 -0.436017 16.4161 -0.445016 18.1845 1.31288L19.281 2.40932C19.7054 2.83079 20.2724 3.06478 20.8754 3.06478H22.4173C24.9086 3.06478 26.935 5.09116 26.935 7.58252V9.12293C26.935 9.72439 27.169 10.2929 27.5935 10.7203L28.6704 11.7988C29.5239 12.6462 29.9978 13.7787 30.0023 14.9861C30.0068 16.1935 29.5404 17.329 28.6899 18.1854L27.5905 19.2818C27.169 19.7063 26.935 20.2718 26.935 20.8747V22.4182C26.935 24.908 24.9086 26.9344 22.4188 26.9344H20.8724C20.2784 26.9344 19.6979 27.1744 19.2765 27.5929L18.1995 28.6698C17.3191 29.5562 16.1581 30.0002 14.9972 30.0002Z" fill="currentColor"/>
                                 </g>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M11.145 19.9811C10.857 19.9811 10.569 19.8716 10.3501 19.6511C9.91058 19.2116 9.91058 18.5006 10.3501 18.0612L18.0596 10.3501C18.4991 9.91064 19.2115 9.91064 19.651 10.3501C20.0905 10.7896 20.0905 11.502 19.651 11.9415L11.94 19.6511C11.721 19.8716 11.433 19.9811 11.145 19.9811Z" fill="currentColor"/>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7544 20.2476C17.925 20.2476 17.247 19.5772 17.247 18.7477C17.247 17.9183 17.9115 17.2478 18.7409 17.2478H18.7544C19.5839 17.2478 20.2543 17.9183 20.2543 18.7477C20.2543 19.5772 19.5839 20.2476 18.7544 20.2476Z" fill="currentColor"/>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2548 12.748C10.4254 12.748 9.74744 12.0775 9.74744 11.2481C9.74744 10.4186 10.4119 9.74817 11.2413 9.74817H11.2548C12.0843 9.74817 12.7548 10.4186 12.7548 11.2481C12.7548 12.0775 12.0843 12.748 11.2548 12.748Z" fill="currentColor"/>
                              </svg>                                                                                        
                           </span>
                        </div>
                        <div class="tp-feature-content">
                           <h3 class="tp-feature-title">Member Discount</h3>
                           <p>Onevery order over Rp 20.000</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                     <div class="tp-feature-item d-flex align-items-start">
                        <div class="tp-feature-icon mr-15">
                           <span>
                              <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.5 24.3333V15C1.5 11.287 2.975 7.72602 5.60051 5.10051C8.22602 2.475 11.787 1 15.5 1C19.213 1 22.774 2.475 25.3995 5.10051C28.025 7.72602 29.5 11.287 29.5 15V24.3333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M29.5 25.8889C29.5 26.714 29.1722 27.5053 28.5888 28.0888C28.0053 28.6722 27.214 29 26.3889 29H24.8333C24.0082 29 23.2169 28.6722 22.6335 28.0888C22.05 27.5053 21.7222 26.714 21.7222 25.8889V21.2222C21.7222 20.3971 22.05 19.6058 22.6335 19.0223C23.2169 18.4389 24.0082 18.1111 24.8333 18.1111H29.5V25.8889ZM1.5 25.8889C1.5 26.714 1.82778 27.5053 2.41122 28.0888C2.99467 28.6722 3.78599 29 4.61111 29H6.16667C6.99179 29 7.78311 28.6722 8.36656 28.0888C8.95 27.5053 9.27778 26.714 9.27778 25.8889V21.2222C9.27778 20.3971 8.95 19.6058 8.36656 19.0223C7.78311 18.4389 6.99179 18.1111 6.16667 18.1111H1.5V25.8889Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                                                                                       
                           </span>
                        </div>
                        <div class="tp-feature-content">
                           <h3 class="tp-feature-title">Support 24/7</h3>
                           <p>Contact us 24 hours a day</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- feature area end -->

         <!-- product area start -->
         <section class="tp-product-area pb-55">
            <div class="container">
               <div class="row align-items-end">
                  <div class="col-xl-5 col-lg-6 col-md-5">
                     <div class="tp-section-title-wrapper mb-40">
                        <h3 class="tp-section-title">Trending Products 

                           <svg width="114" height="35" viewBox="0 0 114 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053" stroke="currentColor" stroke-width="4" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                           </svg>
                        </h3>
                     </div>
                  </div>
                  <div class="col-xl-7 col-lg-6 col-md-7">
                     <div class="tp-product-tab tp-product-tab-border mb-45 tp-tab d-flex justify-content-md-end">
                        <ul class="nav nav-tabs justify-content-sm-end" id="productTab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new-tab-pane" type="button" role="tab" aria-controls="new-tab-pane" aria-selected="true">New
                              <span class="tp-product-tab-line">
                                 <svg width="52" height="13" viewBox="0 0 52 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 8.97127C11.6061 -5.48521 33 3.99996 51 11.4635" stroke="currentColor" stroke-width="2" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                                    </svg>
                              </span>
                              </button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured-tab-pane" type="button" role="tab" aria-controls="featured-tab-pane" aria-selected="false">Featured
                              <span class="tp-product-tab-line">
                                 <svg width="52" height="13" viewBox="0 0 52 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 8.97127C11.6061 -5.48521 33 3.99996 51 11.4635" stroke="currentColor" stroke-width="2" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                                    </svg>
                              </span>
                              </button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="topsell-tab" data-bs-toggle="tab" data-bs-target="#topsell-tab-pane" type="button" role="tab" aria-controls="topsell-tab-pane" aria-selected="false">Top Sellers
                              <span class="tp-product-tab-line">
                                 <svg width="52" height="13" viewBox="0 0 52 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 8.97127C11.6061 -5.48521 33 3.99996 51 11.4635" stroke="currentColor" stroke-width="2" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                                 </svg>
                              </span>
                              </button>
                           </li>
                        </ul>                         
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-12">
                     <div class="tp-product-tab-content">
                        <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade show active" id="new-tab-pane" role="tabpanel" aria-labelledby="new-tab" tabindex="0">
                              <div class="row">
                                 <?php
                                 usort($produk, function ($a, $b) {
                                    return $b['id'] - $a['id'];
                                 });

                                 $baru = array_slice($produk, 0, 8);
                                 ?>

                                 <?php foreach ($baru as $prod): ?>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item p-relative transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="/product/<?= esc($prod['id']) ?>">
                                             <img src="<?= esc($prod['foto']) ?>" alt="<?= esc($prod['nama']) ?>">
                                          </a>
                                          <?php if (!empty($prod['badge'])): ?>
                                          <div class="tp-product-badge">
                                             <span class="product-<?= esc($prod['badge']) ?>"><?= esc($prod['badge']) ?></span>
                                          </div>
                                          <?php endif; ?>
                                       </div>
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="<?=site_url()?>"><?= esc($prod['nama_kategori']) ?></a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="/product/<?= esc($prod['id']) ?>">
                                                <?= esc($prod['nama']) ?>
                                             </a>
                                          </h3>
                                          <div class="tp-product-price-wrapper">
                                              <?php if (!empty($prod['harga'])): ?>
                                               <span class="tp-product-price old-price">Rp <?= number_format($prod['harga'] * 1.1, 0, ',', '.') ?></span>
                                              <?php endif; ?>
                                              <span class="tp-product-price new-price">Rp <?= number_format($prod['harga'], 0, ',', '.') ?></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <?php endforeach; ?>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="featured-tab-pane" role="tabpanel" aria-labelledby="featured-tab" tabindex="0">
                              <div class="row">
                                 <?php
                                 shuffle($produk);
                                 $random = array_slice($produk, 0, 8);
                                 ?>

                                 <?php foreach ($random as $prod): ?>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="/product/<?= esc($prod['id']) ?>">
                                             <img src="<?= esc($prod['foto']) ?>" alt="<?= esc($prod['nama']) ?>">
                                          </a>
                                          <?php if (!empty($prod['badge'])): ?>
                                          <div class="tp-product-badge">
                                             <span class="product-<?= esc($prod['badge']) ?>"><?= esc($prod['badge']) ?></span>
                                          </div>
                                          <?php endif; ?>
                                       </div>
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="<?=site_url()?>"><?= esc($prod['nama_kategori']) ?></a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="/product/<?= esc($prod['id']) ?>">
                                                <?= esc($prod['nama']) ?>
                                             </a>
                                          </h3>
                                          <div class="tp-product-price-wrapper">
                                             <?php if (!empty($prod['harga'])): ?>
                                             <span class="tp-product-price old-price">Rp <?= number_format($prod['harga'] * 1.1, 0, ',', '.') ?></span>
                                             <?php endif; ?>
                                             <span class="tp-product-price new-price">Rp <?= number_format($prod['harga'], 0, ',', '.') ?></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <?php endforeach; ?>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="topsell-tab-pane" role="tabpanel" aria-labelledby="topsell-tab" tabindex="0">
                              <div class="row">
                                 <?php foreach ($orders as $order): ?>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="/product/<?= esc($order['produk_id']) ?>">
                                             <img src="<?= esc($order['foto_produk']) ?>" alt="<?= esc($order['nama_produk']) ?>">
                                          </a>
                                          <div class="tp-product-badge">
                                             <span class="product-sale">Top Seller</span>
                                          </div>
                                       </div>
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="#">Top Seller</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="/product/<?= esc($order['produk_id']) ?>">
                                                <?= esc($order['nama_produk']) ?>
                                             </a>
                                          </h3>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price">Rp <?= number_format($order['harga_produk'], 0, ',', '.') ?></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <?php endforeach; ?>
                              </div>
                           </div>
                         </div>                         
                     </div>
                  </div>
               </div>
               
            </div>
         </section>
         <!-- product area end -->

         <!-- banner area start -->
         <section class="tp-banner-area pb-70">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 col-lg-7">
                     <div class="tp-banner-item tp-banner-height p-relative mb-30 z-index-1 fix">
                        <div class="tp-banner-thumb include-bg transition-3" data-background="assets/img/product/banner/product-banner-1.jpg"></div>
                        <div class="tp-banner-content">
                           <span>Sale 20% off all store</span>
                           <h3 class="tp-banner-title">
                              <a href="<?=site_url()?>">Smartphone <br> BLU G91 Pro 2022</a>
                           </h3>
                           <div class="tp-banner-btn">
                              <a href="<?=site_url()?>" class="tp-link-btn">Shop Now 
                                 <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.9998 6.19656L1 6.19656" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.75674 0.975394L14 6.19613L8.75674 11.4177" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-5">
                     <div class="tp-banner-item tp-banner-item-sm tp-banner-height p-relative mb-30 z-index-1 fix">
                        <div class="tp-banner-thumb include-bg transition-3" data-background="assets/img/product/banner/product-banner-2.jpg"></div>
                        <div class="tp-banner-content">
                           <h3 class="tp-banner-title">
                              <a href="<?=site_url()?>">HyperX Cloud II <br> Wireless</a>
                           </h3>
                           <p>Sale 35% off</p>
                           <div class="tp-banner-btn">
                              <a href="<?=site_url()?>" class="tp-link-btn">Shop Now 
                                 <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.9998 6.19656L1 6.19656" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.75674 0.975394L14 6.19613L8.75674 11.4177" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- banner area end -->


         <!-- product banner area start -->
         <div class="tp-product-banner-area pb-90">
            <div class="container">
               <div class="tp-product-banner-slider fix">
                  <div class="tp-product-banner-slider-active swiper-container">
                     <div class="swiper-wrapper">
                        <div class="tp-product-banner-inner theme-bg p-relative z-index-1 fix swiper-slide">
                           <h4 class="tp-product-banner-bg-text">tablet</h4>
                           <div class="row align-items-center">
                              <div class="col-xl-6 col-lg-6">
                                 <div class="tp-product-banner-content p-relative z-index-1">
                                    <span class="tp-product-banner-subtitle">Tablet Collection 2023</span>
                                    <h3 class="tp-product-banner-title">Samsung Galaxy Tab S6, Wifi Tablet</h3>
                                    <div class="tp-product-banner-price mb-40">
                                       <span class="old-price">$1240.00</span>
                                       <p class="new-price">$975.00</p>
                                    </div>
                                    <div class="tp-product-banner-btn">
                                       <a href="<?=site_url()?>" class="tp-btn tp-btn-2">Shop now</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-lg-6">
                                 <div class="tp-product-banner-thumb-wrapper p-relative">
                                    <div class="tp-product-banner-thumb-shape">
                                       <span class="tp-product-banner-thumb-gradient"></span>
                                       <img class="tp-offer-shape" src="assets/img/banner/banner-slider-offer.png" alt="">
                                    </div>
         
                                    <div class="tp-product-banner-thumb text-end p-relative z-index-1">
                                       <img src="assets/img/banner/banner-slider-1.png" alt="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>                 
                     </div>
                     <div class="tp-product-banner-slider-dot tp-swiper-dot"></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product banner area end -->
         <!-- product sm area end -->
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
                        <h3 class="tp-product-details-title">Samsung galaxy A8 tablet</h3>
   
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
                                    <input class="tp-cart-input" type="text" value="1"/>
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
                              <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1 3.16431H10.8622C12.0451 3.16431 12.9999 4.08839 12.9999 5.23315V7.52268" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M3.25177 0.985168L1 3.16433L3.25177 5.34354" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M12.9999 12.5983H3.13775C1.95486 12.5983 1 11.6742 1 10.5295V8.23993" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M10.748 14.7774L12.9998 12.5983L10.748 10.4191" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              Compare
                           </button>
                           <button type="button" class="tp-product-details-action-sm-btn">
                              <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M2.33541 7.54172C3.36263 10.6766 7.42094 13.2113 8.49945 13.8387C9.58162 13.2048 13.6692 10.6421 14.6635 7.5446C15.3163 5.54239 14.7104 3.00621 12.3028 2.24514C11.1364 1.8779 9.77578 2.1014 8.83648 2.81432C8.64012 2.96237 8.36757 2.96524 8.16974 2.81863C7.17476 2.08487 5.87499 1.86999 4.69024 2.24514C2.28632 3.00549 1.68259 5.54167 2.33541 7.54172ZM8.50115 15C8.4103 15 8.32018 14.9784 8.23812 14.9346C8.00879 14.8117 2.60674 11.891 1.29011 7.87081C1.28938 7.87081 1.28938 7.8701 1.28938 7.8701C0.462913 5.33895 1.38316 2.15812 4.35418 1.21882C5.7492 0.776121 7.26952 0.97088 8.49895 1.73195C9.69029 0.993159 11.2729 0.789057 12.6401 1.21882C15.614 2.15956 16.5372 5.33966 15.7115 7.8701C14.4373 11.8443 8.99571 14.8088 8.76492 14.9332C8.68286 14.9777 8.592 15 8.50115 15Z" fill="currentColor"/>
                                 <path d="M8.49945 13.8387L8.42402 13.9683L8.49971 14.0124L8.57526 13.9681L8.49945 13.8387ZM14.6635 7.5446L14.5209 7.4981L14.5207 7.49875L14.6635 7.5446ZM12.3028 2.24514L12.348 2.10211L12.3478 2.10206L12.3028 2.24514ZM8.83648 2.81432L8.92678 2.93409L8.92717 2.9338L8.83648 2.81432ZM8.16974 2.81863L8.25906 2.69812L8.25877 2.69791L8.16974 2.81863ZM4.69024 2.24514L4.73548 2.38815L4.73552 2.38814L4.69024 2.24514ZM8.23812 14.9346L8.16727 15.0668L8.16744 15.0669L8.23812 14.9346ZM1.29011 7.87081L1.43266 7.82413L1.39882 7.72081H1.29011V7.87081ZM1.28938 7.8701L1.43938 7.87009L1.43938 7.84623L1.43197 7.82354L1.28938 7.8701ZM4.35418 1.21882L4.3994 1.36184L4.39955 1.36179L4.35418 1.21882ZM8.49895 1.73195L8.42 1.85949L8.49902 1.90841L8.57801 1.85943L8.49895 1.73195ZM12.6401 1.21882L12.6853 1.0758L12.685 1.07572L12.6401 1.21882ZM15.7115 7.8701L15.5689 7.82356L15.5686 7.8243L15.7115 7.8701ZM8.76492 14.9332L8.69378 14.8011L8.69334 14.8013L8.76492 14.9332ZM2.19287 7.58843C2.71935 9.19514 4.01596 10.6345 5.30013 11.744C6.58766 12.8564 7.88057 13.6522 8.42402 13.9683L8.57487 13.709C8.03982 13.3978 6.76432 12.6125 5.49626 11.517C4.22484 10.4185 2.97868 9.02313 2.47795 7.49501L2.19287 7.58843ZM8.57526 13.9681C9.12037 13.6488 10.4214 12.8444 11.7125 11.729C12.9999 10.6167 14.2963 9.17932 14.8063 7.59044L14.5207 7.49875C14.0364 9.00733 12.7919 10.4 11.5164 11.502C10.2446 12.6008 8.9607 13.3947 8.42364 13.7093L8.57526 13.9681ZM14.8061 7.59109C15.1419 6.5613 15.1554 5.39131 14.7711 4.37633C14.3853 3.35729 13.5989 2.49754 12.348 2.10211L12.2576 2.38816C13.4143 2.75381 14.1347 3.54267 14.4905 4.48255C14.8479 5.42648 14.8379 6.52568 14.5209 7.4981L14.8061 7.59109ZM12.3478 2.10206C11.137 1.72085 9.72549 1.95125 8.7458 2.69484L8.92717 2.9338C9.82606 2.25155 11.1357 2.03494 12.2577 2.38821L12.3478 2.10206ZM8.74618 2.69455C8.60221 2.8031 8.40275 2.80462 8.25906 2.69812L8.08043 2.93915C8.33238 3.12587 8.67804 3.12163 8.92678 2.93409L8.74618 2.69455ZM8.25877 2.69791C7.225 1.93554 5.87527 1.71256 4.64496 2.10213L4.73552 2.38814C5.87471 2.02742 7.12452 2.2342 8.08071 2.93936L8.25877 2.69791ZM4.64501 2.10212C3.39586 2.49722 2.61099 3.35688 2.22622 4.37554C1.84299 5.39014 1.85704 6.55957 2.19281 7.58826L2.478 7.49518C2.16095 6.52382 2.15046 5.42513 2.50687 4.48154C2.86175 3.542 3.58071 2.7534 4.73548 2.38815L4.64501 2.10212ZM8.50115 14.85C8.43415 14.85 8.36841 14.8341 8.3088 14.8023L8.16744 15.0669C8.27195 15.1227 8.38645 15.15 8.50115 15.15V14.85ZM8.30897 14.8024C8.19831 14.7431 6.7996 13.9873 5.26616 12.7476C3.72872 11.5046 2.07716 9.79208 1.43266 7.82413L1.14756 7.9175C1.81968 9.96978 3.52747 11.7277 5.07755 12.9809C6.63162 14.2373 8.0486 15.0032 8.16727 15.0668L8.30897 14.8024ZM1.29011 7.72081C1.31557 7.72081 1.34468 7.72745 1.37175 7.74514C1.39802 7.76231 1.41394 7.78437 1.42309 7.8023C1.43191 7.81958 1.43557 7.8351 1.43727 7.84507C1.43817 7.8504 1.43869 7.85518 1.43898 7.85922C1.43913 7.86127 1.43923 7.8632 1.43929 7.865C1.43932 7.86591 1.43934 7.86678 1.43936 7.86763C1.43936 7.86805 1.43937 7.86847 1.43937 7.86888C1.43937 7.86909 1.43937 7.86929 1.43938 7.86949C1.43938 7.86959 1.43938 7.86969 1.43938 7.86979C1.43938 7.86984 1.43938 7.86992 1.43938 7.86994C1.43938 7.87002 1.43938 7.87009 1.28938 7.8701C1.13938 7.8701 1.13938 7.87017 1.13938 7.87025C1.13938 7.87027 1.13938 7.87035 1.13938 7.8704C1.13938 7.8705 1.13938 7.8706 1.13938 7.8707C1.13938 7.8709 1.13938 7.87111 1.13938 7.87131C1.13939 7.87173 1.13939 7.87214 1.1394 7.87257C1.13941 7.87342 1.13943 7.8743 1.13946 7.8752C1.13953 7.87701 1.13962 7.87896 1.13978 7.88103C1.14007 7.88512 1.14059 7.88995 1.14151 7.89535C1.14323 7.90545 1.14694 7.92115 1.15585 7.93861C1.16508 7.95672 1.18114 7.97896 1.20762 7.99626C1.2349 8.01409 1.26428 8.02081 1.29011 8.02081V7.72081ZM1.43197 7.82354C0.623164 5.34647 1.53102 2.26869 4.3994 1.36184L4.30896 1.0758C1.23531 2.04755 0.302663 5.33142 1.14679 7.91665L1.43197 7.82354ZM4.39955 1.36179C5.7527 0.932384 7.22762 1.12136 8.42 1.85949L8.57791 1.60441C7.31141 0.820401 5.74571 0.619858 4.30881 1.07585L4.39955 1.36179ZM8.57801 1.85943C9.73213 1.14371 11.2694 0.945205 12.5951 1.36192L12.685 1.07572C11.2763 0.632908 9.64845 0.842602 8.4199 1.60447L8.57801 1.85943ZM12.5948 1.36184C15.4664 2.27018 16.3769 5.34745 15.5689 7.82356L15.8541 7.91663C16.6975 5.33188 15.7617 2.04893 12.6853 1.07581L12.5948 1.36184ZM15.5686 7.8243C14.9453 9.76841 13.2952 11.4801 11.7526 12.7288C10.2142 13.974 8.80513 14.7411 8.69378 14.8011L8.83606 15.0652C8.9555 15.0009 10.3826 14.2236 11.9413 12.9619C13.4957 11.7037 15.2034 9.94602 15.8543 7.91589L15.5686 7.8243ZM8.69334 14.8013C8.6337 14.8337 8.56752 14.85 8.50115 14.85V15.15C8.61648 15.15 8.73201 15.1217 8.83649 15.065L8.69334 14.8013Z" fill="currentColor"/>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8384 6.93209C12.5548 6.93209 12.3145 6.71865 12.2911 6.43693C12.2427 5.84618 11.8397 5.34743 11.266 5.1656C10.9766 5.07361 10.8184 4.76962 10.9114 4.48718C11.0059 4.20402 11.3129 4.05023 11.6031 4.13934C12.6017 4.45628 13.3014 5.32371 13.3872 6.34925C13.4113 6.64606 13.1864 6.90622 12.8838 6.92993C12.8684 6.93137 12.8538 6.93209 12.8384 6.93209Z" fill="currentColor"/>
                                 <path d="M12.8384 6.93209C12.5548 6.93209 12.3145 6.71865 12.2911 6.43693C12.2427 5.84618 11.8397 5.34743 11.266 5.1656C10.9766 5.07361 10.8184 4.76962 10.9114 4.48718C11.0059 4.20402 11.3129 4.05023 11.6031 4.13934C12.6017 4.45628 13.3014 5.32371 13.3872 6.34925C13.4113 6.64606 13.1864 6.90622 12.8838 6.92993C12.8684 6.93137 12.8538 6.93209 12.8384 6.93209" stroke="currentColor" stroke-width="0.3"/>
                              </svg>
                              Add Wishlist
                           </button>
                           <button type="button" class="tp-product-details-action-sm-btn">
                              <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M8.575 12.6927C8.775 12.6927 8.94375 12.6249 9.08125 12.4895C9.21875 12.354 9.2875 12.1878 9.2875 11.9907C9.2875 11.7937 9.21875 11.6275 9.08125 11.492C8.94375 11.3565 8.775 11.2888 8.575 11.2888C8.375 11.2888 8.20625 11.3565 8.06875 11.492C7.93125 11.6275 7.8625 11.7937 7.8625 11.9907C7.8625 12.1878 7.93125 12.354 8.06875 12.4895C8.20625 12.6249 8.375 12.6927 8.575 12.6927ZM8.55625 5.0638C8.98125 5.0638 9.325 5.17771 9.5875 5.40553C9.85 5.63335 9.98125 5.92582 9.98125 6.28294C9.98125 6.52924 9.90625 6.77245 9.75625 7.01258C9.60625 7.25272 9.3625 7.5144 9.025 7.79763C8.7 8.08087 8.44063 8.3795 8.24688 8.69352C8.05313 9.00754 7.95625 9.29385 7.95625 9.55246C7.95625 9.68792 8.00938 9.79567 8.11563 9.87572C8.22188 9.95576 8.34375 9.99578 8.48125 9.99578C8.63125 9.99578 8.75625 9.94653 8.85625 9.84801C8.95625 9.74949 9.01875 9.62635 9.04375 9.47857C9.08125 9.23228 9.16562 9.0137 9.29688 8.82282C9.42813 8.63195 9.63125 8.42568 9.90625 8.20402C10.2812 7.89615 10.5531 7.58829 10.7219 7.28042C10.8906 6.97256 10.975 6.62775 10.975 6.246C10.975 5.59333 10.7594 5.06996 10.3281 4.67589C9.89688 4.28183 9.325 4.0848 8.6125 4.0848C8.1375 4.0848 7.7 4.17716 7.3 4.36187C6.9 4.54659 6.56875 4.81751 6.30625 5.17463C6.20625 5.31009 6.16563 5.44863 6.18438 5.59025C6.20313 5.73187 6.2625 5.83962 6.3625 5.91351C6.5 6.01202 6.64688 6.04281 6.80313 6.00587C6.95937 5.96892 7.0875 5.88272 7.1875 5.74726C7.35 5.5256 7.54688 5.35627 7.77813 5.23929C8.00938 5.1223 8.26875 5.0638 8.55625 5.0638ZM8.5 15.7775C7.45 15.7775 6.46875 15.5897 5.55625 15.2141C4.64375 14.8385 3.85 14.3182 3.175 13.6532C2.5 12.9882 1.96875 12.2062 1.58125 11.3073C1.19375 10.4083 1 9.43547 1 8.38873C1 7.35431 1.19375 6.38762 1.58125 5.48866C1.96875 4.58969 2.5 3.80772 3.175 3.14273C3.85 2.47775 4.64375 1.95438 5.55625 1.57263C6.46875 1.19088 7.45 1 8.5 1C9.5375 1 10.5125 1.19088 11.425 1.57263C12.3375 1.95438 13.1313 2.47775 13.8063 3.14273C14.4813 3.80772 15.0156 4.58969 15.4094 5.48866C15.8031 6.38762 16 7.35431 16 8.38873C16 9.43547 15.8031 10.4083 15.4094 11.3073C15.0156 12.2062 14.4813 12.9882 13.8063 13.6532C13.1313 14.3182 12.3375 14.8385 11.425 15.2141C10.5125 15.5897 9.5375 15.7775 8.5 15.7775ZM8.5 14.6692C10.2625 14.6692 11.7656 14.0534 13.0094 12.822C14.2531 11.5905 14.875 10.1128 14.875 8.38873C14.875 6.6647 14.2531 5.18695 13.0094 3.95549C11.7656 2.72404 10.2625 2.10831 8.5 2.10831C6.7125 2.10831 5.20312 2.72404 3.97188 3.95549C2.74063 5.18695 2.125 6.6647 2.125 8.38873C2.125 10.1128 2.74063 11.5905 3.97188 12.822C5.20312 14.0534 6.7125 14.6692 8.5 14.6692Z" fill="currentColor" stroke="currentColor" stroke-width="0.3"/>
                              </svg>
                              Ask a question
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
          
      </main>
      

      <!-- footer area start -->
      <?=view("footer")?>
      <!-- footer area end -->



      <!-- JS here -->
      <script src="assets/js/vendor/jquery.js"></script>
      <script src="assets/js/vendor/waypoints.js"></script>
      <script src="assets/js/bootstrap-bundle.js"></script>
      <script src="assets/js/meanmenu.js"></script>
      <script src="assets/js/swiper-bundle.js"></script>
      <script src="assets/js/slick.js"></script>
      <script src="assets/js/range-slider.js"></script>
      <script src="assets/js/magnific-popup.js"></script>
      <script src="assets/js/nice-select.js"></script>
      <script src="assets/js/purecounter.js"></script>
      <script src="assets/js/countdown.js"></script>
      <script src="assets/js/wow.js"></script>
      <script src="assets/js/isotope-pkgd.js"></script>
      <script src="assets/js/imagesloaded-pkgd.js"></script>
      <script src="assets/js/ajax-form.js"></script>
      <script src="assets/js/main.js"></script>
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

<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:14:29 GMT -->
</html>