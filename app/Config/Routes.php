<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/save', 'Home::save');
$routes->get('/hapus/(:num)', 'Home::hapus/$1');
