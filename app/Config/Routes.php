<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/search', 'Home::index');
$routes->get('/login', 'Admin::index');
$routes->post('/login', 'Admin::login');
$routes->get('/logout', 'Admin::logout');
$routes->get('/admin', 'Home::admin');
$routes->get('/admin/chart', 'Home::chart');
$routes->get('/admin/delete/(:any)', 'Home::hapus/$1');
$routes->get('/admin/edit/(:any)', 'Home::edit/$1');
$routes->get('/admin/create', 'Home::tambah');
$routes->get('/admin/create/(:any)', 'Home::tambah/$1');
$routes->post('/admin/create', 'Home::simpan');
$routes->get('/pengadaan', 'Home::pengadaan');

