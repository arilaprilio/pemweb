<?php

use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->match(['get'], '/auth/register', 'Auth\Register::index');
$routes->match(['post'], '/auth/register/submit', 'Auth\Register::register');
$routes->match(['get'], '/auth/login', 'Auth\Login::index');
$routes->match(['post'], '/auth/login/submit', 'Auth\Login::login');
$routes->match(['get'], '/profiles', 'User\Index::index');
$routes->match(['post'], '/profiles/update', 'User\Index::update');
$routes->match(['post'], '/profiles/password', 'User\Index::password');
$routes->match(['get'], '/profiles/pesanan/(:num)', 'User\Index::pesanan/$1');
$routes->match(['get'], '/category/(:num)', 'Category::index/$1');
$routes->match(['get'], '/order', 'Order::index');
$routes->match(['get'], '/cart', 'Cart::index');
$routes->match(['get'], '/cart/delete', 'Cart::hapus');
$routes->get('product/(:num)', 'Product::index/$1');
$routes->get('checkout', 'Checkout::index');
$routes->post('checkout/process', 'Checkout::process');
$routes->get('wishlist', 'Wishlist::index');
$routes->get('wishlist/delete', 'Wishlist::delete');
$routes->get('wishlist/tambah', 'Wishlist::tambah');

$routes->match(['post'], '/api/addCart', 'Api\Index::addCart');
$routes->match(['post'], '/api/addWishlist', 'Api\Index::addWishlist');
$routes->match(['post'], '/api/buyNow', 'Api\Index::buyNow');
$routes->match(['post'], '/api/updateCart', 'Api\Index::updateCart');

$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function($routes){
    $routes->get('', 'Dashboard::index');
    $routes->get('dashboard', 'Dashboard::index');
    $routes->get('logout', 'Dashboard::logout');
    $routes->get('customer', 'Customer::index');
    $routes->post('customer/edit', 'Customer::edit');
    $routes->post('customer/delete', 'Customer::delete');
    $routes->get('category', 'Category::index');
    $routes->post('produk/tambah', 'Category::produk_tambah');
    $routes->post('produk/edit', 'Category::produk_edit');
    $routes->post('produk/delete', 'Category::produk_delete');
    $routes->post('category/tambah', 'Category::kategori_tambah');
    $routes->post('category/edit', 'Category::kategori_edit');
    $routes->post('category/delete', 'Category::kategori_delete');
    $routes->get('banner', 'Banner::index');
    $routes->post('banner/update', 'Banner::update');
    $routes->get('shipping', 'Shipping::index');
    $routes->get('shipping/detail/(:num)', 'Shipping::detail/$1');
});