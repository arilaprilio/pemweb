
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
               <div class="tp-main-menu-mobile fix d-lg-none mb-40"></div>

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
                           <img src="<?=site_url()?>assets/img/icon/language-flag.png" alt="">
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
                     <a href="/pages/wishlist.html" class="tp-mobile-item-btn">
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
                           <a href="/pages/product-details.html">
                              <img src="../assets/img/product/product-1.jpg" alt="">
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
                     <img src="../assets/img/product/cartmini/empty-cart.png" alt="">
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
         <div class="tp-header-area p-relative z-index-11">


            <!-- header main start -->
            <div class="tp-header-main tp-header-sticky">
               <div class="container">
                  <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                        <div class="logo">
                           <a href="<?=site_url()?>">
                              <img src="<?=site_url()?>assets/img/logo/logo.svg" alt="logo" style="height: 70px;">
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
                                       <option>Mobile</option>
                                       <option>Digital Watch</option>
                                       <option>Computer</option>
                                       <option>Watch</option>
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
                              <a href="./user/profile.html" class="d-flex align-items-center">
                                 <div class="tp-header-login-icon">
                                    <span>
                                       <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <circle cx="8.57894" cy="5.77803" r="4.77803" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00002 17.2014C0.998732 16.8655 1.07385 16.5337 1.2197 16.2311C1.67736 15.3158 2.96798 14.8307 4.03892 14.611C4.81128 14.4462 5.59431 14.336 6.38217 14.2815C7.84084 14.1533 9.30793 14.1533 10.7666 14.2815C11.5544 14.3367 12.3374 14.4468 13.1099 14.611C14.1808 14.8307 15.4714 15.27 15.9291 16.2311C16.2224 16.8479 16.2224 17.564 15.9291 18.1808C15.4714 19.1419 14.1808 19.5812 13.1099 19.7918C12.3384 19.9634 11.5551 20.0766 10.7666 20.1304C9.57937 20.2311 8.38659 20.2494 7.19681 20.1854C6.92221 20.1854 6.65677 20.1854 6.38217 20.1304C5.59663 20.0773 4.81632 19.9641 4.04807 19.7918C2.96798 19.5812 1.68652 19.1419 1.2197 18.1808C1.0746 17.8747 0.999552 17.5401 1.00002 17.2014Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>                                       
                                    </span>
                                 </div>
                                 <div class="tp-header-login-content d-none d-xl-block">
                                    <span>Hello, Sign In</span>
                                    <h5 class="tp-header-login-title">Your Account</h5>
                                 </div>
                              </a>
                           </div>
                           <div class="tp-header-action d-flex align-items-center ml-50">
                              <div class="tp-header-action-item d-none d-lg-block">
                                 <a href="/pages/wishlist.html" class="tp-header-action-btn">
                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M11.239 18.8538C13.4096 17.5179 15.4289 15.9456 17.2607 14.1652C18.5486 12.8829 19.529 11.3198 20.1269 9.59539C21.2029 6.25031 19.9461 2.42083 16.4289 1.28752C14.5804 0.692435 12.5616 1.03255 11.0039 2.20148C9.44567 1.03398 7.42754 0.693978 5.57894 1.28752C2.06175 2.42083 0.795919 6.25031 1.87187 9.59539C2.46978 11.3198 3.45021 12.8829 4.73806 14.1652C6.56988 15.9456 8.58917 17.5179 10.7598 18.8538L10.9949 19L11.239 18.8538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M7.26062 5.05302C6.19531 5.39332 5.43839 6.34973 5.3438 7.47501" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> 
                                    <span class="tp-header-action-badge">4</span>                          
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
                                    <span class="tp-header-action-badge">13</span>                                                                          
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
                                    <li  class="has-dropdown has-mega-menu">
                                       <a href="#">Shop</a>
                                       <div class="shop-mega-menu tp-submenu tp-mega-menu">
                                          <div class="row">
                                             <div class="col-lg-2">
                                                <div class="shop-mega-menu-list">
                                                      <a href="#" class="shop-mega-menu-title">Shop Pages</a>
                                                      <ul>
                                                          <li><a href="/pages/shop-category.html">Grid Category</a></li>
                                                          <li><a href="shop.html">Grid Layout</a></li>
                                                          <li><a href="shop-list.html">List Layout</a></li>
                                                          <li><a href="shop-masonary.html">Masonary Layout</a></li>
                                                          <li><a href="shop-full-width.html">Full width Layout</a></li>
                                                          <li><a href="shop-1600.html">1600px Layout</a></li>
                                                          <li><a href="shop.html">Left Sidebar</a></li>
                                                          <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                          <li><a href="shop-no-sidebar.html">Hidden Sidebar</a></li>
                                                      </ul>
                                                </div>
                                             </div>
                                             <div class="col-lg-2">
                                                <div class="shop-mega-menu-list">
                                                      <a href="shop.html" class="shop-mega-menu-title">Features</a>
                                                      <ul>
                                                         <li><a href="shop-filter-dropdown.html">Filter Dropdown</a></li>
                                                         <li><a href="shop-filter-offcanvas.html">Filters Offcanvas</a></li>
                                                         <li><a href="shop.html">Filters Sidebar</a></li>
                                                         <li><a href="shop-load-more.html">Load More button</a></li>
                                                         <li><a href="shop-infinite-scroll.html">Infinit scrolling</a></li>
                                                         <li><a href="shop-list.html">Collections list</a></li>
                                                         <li><a href="shop.html">Hidden search</a></li>
                                                         <li><a href="shop.html">Search Full screen</a></li>
                                                      </ul>
                                                </div>
                                             </div>
                                             <div class="col-lg-2">
                                                <div class="shop-mega-menu-list">
                                                      <a href="shop.html" class="shop-mega-menu-title">Hover Style</a>
                                                      <ul>
                                                         <li><a href="shop.html">Hover Style 1</a></li>
                                                         <li><a href="shop.html">Hover Style 2</a></li>
                                                         <li><a href="shop.html">Hover Style 3</a></li>
                                                         <li><a href="shop.html">Hover Style 4</a></li>
                                                      </ul>
                                                </div>
                                             </div>
                                             <div class="col-lg-3">
                                                <div class="shop-mega-menu-img">
                                                   <img src="<?=site_url()?>assets/img/menu/product/menu-product-img-1.jpg" alt="">
                                                   <div class="shop-mega-menu-btn">
                                                      <a href="shop-category.html" class="tp-menu-showcase-btn tp-menu-showcase-btn-2">Phones</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-lg-3">
                                                <div class="shop-mega-menu-img">
                                                   <img src="<?=site_url()?>assets/img/menu/product/menu-product-img-2.jpg" alt="">
                                                   <div class="shop-mega-menu-btn">
                                                      <a href="shop-category.html" class="tp-menu-showcase-btn tp-menu-showcase-btn-2">Cameras</a>
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
                                             <a href="#" class="mega-menu-title">Shop Page</a>
                                             <ul class="tp-submenu">
                                               <li><a href="/pages/shop-category.html">Only Category</a></li>
                                                <li><a href="shop-filter-offcanvas.html">Shop Grid</a></li>
                                                <li><a href="shop.html">Shop Grid with Sideber</a></li>
                                                <li><a href="shop-list.html">Shop List</a></li>
                                                <li><a href="shop-category.html">Categories</a></li>
                                                <li><a href="/pages/product-details.html">Product Details</a></li>
                                                <li><a href="product-details-progress.html">Product Details Progress</a></li>
                                             </ul>
                                          </li>
                                          <!-- third col -->
                                          <li  class="has-dropdown">
                                             <a href="/pages/product-details.html" class="mega-menu-title">Products</a>
                                             <ul class="tp-submenu">
                                                
                                                <li><a href="/pages/product-details.html">Product Simple</a></li>
                                                <li><a href="product-details-video.html">With Video</a></li>
                                                <li><a href="product-details-countdown.html">With Countdown Timer</a></li>
                                                <li><a href="product-details-presentation.html">Product Presentation</a></li>
                                                <li><a href="product-details-swatches.html">Variations Swatches</a></li>
                                                <li><a href="product-details-list.html">List View</a></li>
                                                <li><a href="product-details-gallery.html">Details Gallery</a></li>
                                                <li><a href="product-details-slider.html">With Slider</a></li>
                                             </ul>
                                          </li>
                                          <!-- third col -->
                                          <li  class="has-dropdown">
                                             <a href="#" class="mega-menu-title">eCommerce</a>
                                             <ul class="tp-submenu">
                                                <li><a href="order.html">Track Your Order</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="profile.html">My account</a></li>
                                             </ul>
                                          </li>

                                          <!-- second col -->
                                          <li  class="has-dropdown">
                                             <a href="#" class="mega-menu-title">More Pages</a>
                                             <ul class="tp-submenu">
                                                
                                               
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="forgot.html">Forgot Password</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                             </ul>
                                          </li>

                                       </ul>
                                    </li>
                                    <li><a href="pages/contact.html">Contact</a></li>
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
                                 <p><a href="tel:402-763-282-46">+(402) 763 282 46</a></p>
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

      <div id="header-sticky-2" class="tp-header-sticky-area">
         <div class="container">
            <div class="tp-mega-menu-wrapper p-relative">
               <div class="row align-items-center">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                     <div class="logo">
                        <a href="<?=site_url()?>">
                           <img class="m-20" src="<?=site_url()?>assets/img/logo/logo.svg" alt="logo" style="height: 50px;">
                        </a>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-block">
                     <div class="tp-header-sticky-menu main-menu menu-style-1">
                        <nav id="mobile-menu"> 
                           <ul>
                              <li  class="has-dropdown has-mega-menu">
                                 <a href="shop.html">Shop</a>
                                 <div class="shop-mega-menu tp-submenu tp-mega-menu">
                                    <div class="row">
                                       <div class="col-lg-2">
                                          <div class="shop-mega-menu-list">
                                                <a href="shop.html" class="shop-mega-menu-title">Shop Pages</a>
                                                <ul>
                                                    <li><a href="shop-category.html">Grid Category</a></li>
                                                    <li><a href="shop.html">Grid Layout</a></li>
                                                    <li><a href="shop-list.html">List Layout</a></li>
                                                    <li><a href="shop-masonary.html">Masonary Layout</a></li>
                                                    <li><a href="shop-full-width.html">Full width Layout</a></li>
                                                    <li><a href="shop-1600.html">1600px Layout</a></li>
                                                    <li><a href="shop.html">Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a href="shop-no-sidebar.html">Hidden Sidebar</a></li>
                                                </ul>
                                          </div>
                                       </div>
                                       <div class="col-lg-2">
                                          <div class="shop-mega-menu-list">
                                                <a href="shop.html" class="shop-mega-menu-title">Features</a>
                                                <ul>
                                                   <li><a href="shop-filter-dropdown.html">Filter Dropdown</a></li>
                                                   <li><a href="shop-filter-offcanvas.html">Filters Offcanvas</a></li>
                                                   <li><a href="shop.html">Filters Sidebar</a></li>
                                                   <li><a href="shop-load-more.html">Load More button</a></li>
                                                   <li><a href="shop-infinite-scroll.html">Infinit scrolling</a></li>
                                                   <li><a href="shop-list.html">Collections list</a></li>
                                                   <li><a href="shop.html">Hidden search</a></li>
                                                   <li><a href="shop.html">Search Full screen</a></li>
                                                </ul>
                                          </div>
                                       </div>
                                       <div class="col-lg-2">
                                          <div class="shop-mega-menu-list">
                                                <a href="shop.html" class="shop-mega-menu-title">Hover Style</a>
                                                <ul>
                                                   <li><a href="shop.html">Hover Style 1</a></li>
                                                   <li><a href="shop.html">Hover Style 2</a></li>
                                                   <li><a href="shop.html">Hover Style 3</a></li>
                                                   <li><a href="shop.html">Hover Style 4</a></li>
                                                </ul>
                                          </div>
                                       </div>
                                       <div class="col-lg-3">
                                          <div class="shop-mega-menu-img">
                                             <img src="<?=site_url()?>assets/img/menu/product/menu-product-img-1.jpg" alt="">
                                             <div class="shop-mega-menu-btn">
                                                <a href="shop-category.html" class="tp-menu-showcase-btn tp-menu-showcase-btn-2">Phones</a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-3">
                                          <div class="shop-mega-menu-img">
                                             <img src="<?=site_url()?>assets/img/menu/product/menu-product-img-2.jpg" alt="">
                                             <div class="shop-mega-menu-btn">
                                                <a href="shop-category.html" class="tp-menu-showcase-btn tp-menu-showcase-btn-2">Cameras</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                             </li>
                              <li class="has-dropdown has-mega-menu ">
                                 
                                 <a href="shop.html">Products</a>
                                 <ul class="tp-submenu tp-mega-menu mega-menu-style-2">
                                    <!-- first col -->
                                    <li class="has-dropdown">
                                       <a href="shop.html" class="mega-menu-title">Shop Page</a>
                                       <ul class="tp-submenu">
                                          <li><a href="shop-category.html">Only Categories</a></li>
                                          <li><a href="shop-filter-offcanvas.html">Shop Grid</a></li>
                                          <li><a href="shop.html">Shop Grid with Sideber</a></li>
                                          <li><a href="shop-list.html">Shop List</a></li>
                                          <li><a href="shop-category.html">Categories</a></li>
                                          <li><a href="/pages/product-details.html">Product Details</a></li>
                                          <li><a href="product-details-progress.html">Product Details Progress</a></li>
                                       </ul>
                                    </li>
                                    <!-- third col -->
                                    <li  class="has-dropdown">
                                       <a href="/pages/product-details.html" class="mega-menu-title">Products</a>
                                       <ul class="tp-submenu">
                                          
                                          <li><a href="/pages/product-details.html">Product Simple</a></li>
                                          <li><a href="product-details-video.html">With Video</a></li>
                                          <li><a href="product-details-countdown.html">With Countdown Timer</a></li>
                                          <li><a href="product-details-presentation.html">Product Presentation</a></li>
                                          <li><a href="product-details-swatches.html">Variations Swatches</a></li>
                                          <li><a href="product-details-list.html">List View</a></li>
                                          <li><a href="product-details-gallery.html">Details Gallery</a></li>
                                          <li><a href="product-details-slider.html">With Slider</a></li>
                                       </ul>
                                    </li>
                                    <!-- third col -->
                                    <li  class="has-dropdown">
                                       <a href="shop.html" class="mega-menu-title">eCommerce</a>
                                       <ul class="tp-submenu">
                                          <li><a href="cart.html">Shopping Cart</a></li>
                                          <li><a href="order.html">Track Your Order</a></li>
                                          <li><a href="compare.html">Compare</a></li>
                                          <li><a href="wishlist.html">Wishlist</a></li>
                                          <li><a href="checkout.html">Checkout</a></li>
                                          <li><a href="profile.html">My account</a></li>
                                       </ul>
                                    </li>

                                    <!-- second col -->
                                    <li  class="has-dropdown">
                                       <a href="shop.html" class="mega-menu-title">More Pages</a>
                                       <ul class="tp-submenu">
                                          
                                         
                                          <li><a href="about.html">About</a></li>
                                          <li><a href="login.html">Login</a></li>
                                          <li><a href="register.html">Register</a></li>
                                          <li><a href="forgot.html">Forgot Password</a></li>
                                          <li><a href="404.html">404 Error</a></li>
                                       </ul>
                                    </li>

                                 </ul>
                              </li>
                              <li><a href="contact.html">Contact</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                     <div class="tp-header-action d-flex align-items-center justify-content-end ml-50">
                        <div class="tp-header-action-item d-none d-lg-block">
                           <a href="wishlist.html" class="tp-header-action-btn">
                              <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M11.239 18.8538C13.4096 17.5179 15.4289 15.9456 17.2607 14.1652C18.5486 12.8829 19.529 11.3198 20.1269 9.59539C21.2029 6.25031 19.9461 2.42083 16.4289 1.28752C14.5804 0.692435 12.5616 1.03255 11.0039 2.20148C9.44567 1.03398 7.42754 0.693978 5.57894 1.28752C2.06175 2.42083 0.795919 6.25031 1.87187 9.59539C2.46978 11.3198 3.45021 12.8829 4.73806 14.1652C6.56988 15.9456 8.58917 17.5179 10.7598 18.8538L10.9949 19L11.239 18.8538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M7.26062 5.05302C6.19531 5.39332 5.43839 6.34973 5.3438 7.47501" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg> 
                              <span class="tp-header-action-badge">4</span>                          
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
                              <span class="tp-header-action-badge">13</span>                                                                          
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


   <main>
         <!-- error area start -->
         <section class="tp-error-area pt-110 pb-110">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-xl-6 col-lg-8 col-md-10">
                     <div class="tp-error-content text-center">
                        <div class="tp-error-thumb">
                           <img src="<?=site_url()?>assets/img/error/error.png" alt="">
                        </div>

                        <h3 class="tp-error-title">Oops! Page not found</h3>
                        <p>Whoops, this is embarassing. Looks like the page you were looking for wasn't found.</p>

                        <a href="<?=site_url()?>" class="tp-error-btn">Back to Home</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- error area end -->

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
      <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?=site_url()?>assets/js/vendor/jquery.js"></script>
      <script src="<?=site_url()?>assets/js/vendor/waypoints.js"></script>
      <script src="<?=site_url()?>assets/js/bootstrap-bundle.js"></script>
      <script src="<?=site_url()?>assets/js/meanmenu.js"></script>
      <script src="<?=site_url()?>assets/js/swiper-bundle.js"></script>
      <script src="<?=site_url()?>assets/js/slick.js"></script>
      <script src="<?=site_url()?>assets/js/range-slider.js"></script>
      <script src="<?=site_url()?>assets/js/magnific-popup.js"></script>
      <script src="<?=site_url()?>assets/js/nice-select.js"></script>
      <script src="<?=site_url()?>assets/js/purecounter.js"></script>
      <script src="<?=site_url()?>assets/js/countdown.js"></script>
      <script src="<?=site_url()?>assets/js/wow.js"></script>
      <script src="<?=site_url()?>assets/js/isotope-pkgd.js"></script>
      <script src="<?=site_url()?>assets/js/imagesloaded-pkgd.js"></script>
      <script src="<?=site_url()?>assets/js/ajax-form.js"></script>
      <script src="<?=site_url()?>assets/js/main.js"></script>
   </body>

<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/<?=site_url()?> by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:14:29 GMT -->
</html>
