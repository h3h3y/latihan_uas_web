<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/data', 'Home::data');
$routes->get('/tambah', 'Home::tambahdata');
$routes->post('/prosestambah', 'Home::prosestambahdata');
