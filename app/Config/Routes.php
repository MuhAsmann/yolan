<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/save', 'Home::save');
$routes->post('/login', 'Home::login');
$routes->get('/login', 'Home::index');
$routes->post('/logout', 'Home::logout');
$routes->get('/logout', 'Home::logout');
$routes->get('/hapus/(:num)', 'Home::hapus/$1');
$routes->post('/search', 'Home::search');
$routes->get('/search', 'Home::index');

