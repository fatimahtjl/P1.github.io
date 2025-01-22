<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//LOGIN,REGISTER
$routes->get('/register', 'Home::register');
$routes->post('/register', 'Home::processregister');

$routes->get('/login', 'Home::login');
$routes->post('/login', 'Home::processlogin');
$routes->get('login', 'Home::login', ['filter' => 'noauth']);

$routes->get('/logout', 'Home::logout');

$routes->get('/dashboard', 'Home::dashboard', ['filter' => 'auth:admin,user']);

//ADMIN
$routes->get('/admin', 'Admin::index'); // Untuk menampilkan daftar pembeli
$routes->get('/admin/create', 'Admin::create'); // Untuk menampilkan form pembuatan pembeli baru
$routes->post('/admin/create', 'Admin::create'); // Untuk memproses form pembuatan pembeli baru
$routes->get('/admin/edit/(:segment)', 'Admin::edit/$1'); // Untuk menampilkan form pengeditan pembeli berdasarkan ID
$routes->post('/admin/edit/(:segment)', 'Admin::edit/$1'); // Untuk memproses form pengeditan pembeli berdasarkan ID
$routes->get('/admin/delete/(:segment)', 'Admin::delete/$1'); // Untuk menghapus pembeli berdasarkan ID

$routes->get('/adminTransaction', 'AdminTransaction::index');
$routes->get('/adminTransaction/getTransaction/(:segment)', 'AdminTransaction::getTransaction/$1');
$routes->post('/adminTransaction/updateTransaction/(:segment)', 'AdminTransaction::updateTransaction/$1');
$routes->post('/adminTransaction/deleteTransaction/(:segment)', 'AdminTransaction::deleteTransaction/$1');

$routes->get('/admin/getPembeli/(:segment)', 'Admin::getPembeli/$1'); // Untuk mengambil data pembeli berdasarkan ID
$routes->post('/admin/updatePembeli/(:segment)', 'Admin::updatePembeli/$1'); // Untuk memperbarui data pembeli berdasarkan ID

$routes->get('admin/manage-products', 'Barang::index');
$routes->get('admin/add-product', 'Barang::index');
$routes->post('admin/add-product', 'Barang::addProduct');
$routes->post('admin/delete-product/(:num)', 'Barang::deleteProduct/$1');

//CHECKOUT
$routes->group('', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('checkout/(:num)', 'Checkout::index/$1'); // Route untuk method index dengan parameter product_id
    $routes->get('checkout/payment-method', 'Checkout::paymentMethod'); // Route untuk method paymentMethod
    $routes->get('checkout/payment-info', 'Checkout::paymentInfo'); // Route untuk method paymentInfo
    $routes->post('checkout/submit-order', 'Checkout::submitOrder'); // Route untuk method submitOrder
});


//MENU
$routes->get('/menu', 'Product::index');
$routes->get('visit/menu', 'Visitor::index');
$routes->get('/submenu/(:num)', 'Product::sub/$1');
$routes->get('visit/submenu/(:num)', 'Visitor::sub/$1');
$routes->get('search/submenu/(:num)', 'Visitor::sub/$1');

//TESTIMONI
$routes->get('dashboard', 'Testimoni::index');
$routes->post('testimoni/save', 'Testimoni::save');
$routes->get('testimoni/getList', 'Testimoni::getList');
$routes->get('testimoni/get/(:num)', 'Testimoni::get/$1');
$routes->delete('testimoni/delete/(:num)', 'Testimoni::delete/$1');

//CART
$routes->post('/cart/add', 'Cart::add');
$routes->get('/cart', 'Cart::index', ['filter' => 'auth']);
$routes->get('/cart/remove/(:num)', 'Cart::remove/$1');

//SEARCH
$routes->get('/search', 'Product::search');
$routes->get('/search/v', 'Visitor::search');










