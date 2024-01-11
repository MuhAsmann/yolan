<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/save', 'Home::save');
$routes->post('/login', 'Home::login');
$routes->post('/logout', 'Home::logout');
$routes->get('/hapus/(:num)', 'Home::hapus/$1');
