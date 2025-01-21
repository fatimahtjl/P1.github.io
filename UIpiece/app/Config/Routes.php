<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/register', 'Home::register');
$routes->post('/register', 'Home::processregister');

$routes->get('/login', 'Home::login');
$routes->post('/login', 'Home::processlogin');

$routes->get('/logout', 'Home::logout');

$routes->get('/dashboard', 'Home::dashboard');

$routes->get('/menu', 'Product::index');
$routes->get('visit/menu', 'Visitor::index');
$routes->get('/submenu/(:num)', 'Product::sub/$1');
$routes->get('visit/submenu/(:num)', 'Visitor::sub/$1');
$routes->get('search/submenu/(:num)', 'Visitor::sub/$1');

$routes->get('login', 'Home::login', ['filter' => 'noauth']);

$routes->get('dashboard', 'Testimoni::index');
$routes->post('testimoni/save', 'Testimoni::save');
$routes->get('testimoni/getList', 'Testimoni::getList');
$routes->get('testimoni/get/(:num)', 'Testimoni::get/$1');
$routes->delete('testimoni/delete/(:num)', 'Testimoni::delete/$1');

$routes->post('/cart/add', 'Cart::add');
$routes->get('/cart', 'Cart::index', ['filter' => 'auth']);
$routes->get('/cart/remove/(:num)', 'Cart::remove/$1');

$routes->get('/search', 'Product::search');
$routes->get('/search/v', 'Visitor::search');










