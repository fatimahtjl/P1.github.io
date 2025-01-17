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
