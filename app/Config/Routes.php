<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/save', 'Home::save');
$routes->post('/login', 'Home::login');
$routes->get('/register', 'Home::register');
$routes->post('/register', 'Home::register_user');
$routes->get('/login', 'Home::index');
$routes->post('/logout', 'Home::logout');
$routes->get('/logout', 'Home::logout');
$routes->get('/hapus/(:num)', 'Home::hapus/$1');
$routes->post('/search', 'Home::search');
$routes->get('/search', 'Home::index');
$routes->get('/put/(:num)', 'Home::put/$1');
$routes->post('/update/(:num)', 'Home::update/$1');