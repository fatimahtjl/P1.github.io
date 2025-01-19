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

$routes->get('/menu', 'Menu::index');
$routes->post('/submenu', 'Menu::submenu');

$routes->get('cart', 'Menu::cart', ['filter' => 'auth']);
$routes->get('login', 'Home::login', ['filter' => 'noauth']);

$routes->get('dashboard', 'Testimoni::index');
$routes->post('testimoni/save', 'Testimoni::save');
$routes->get('testimoni/getList', 'Testimoni::getList');
$routes->get('testimoni/get/(:num)', 'Testimoni::get/$1');
$routes->delete('testimoni/delete/(:num)', 'Testimoni::delete/$1');





