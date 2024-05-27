<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MainController::index');

$routes->get('/home', 'MainController::index');
$routes->get('/solusi', 'MainController::solusi');
$routes->get('/fitur/(:num)', 'MainController::fitur/$1');
$routes->get('/detail_fitur/(:num)', 'MainController::detail_fitur/$1');
$routes->get('/tentangkami', 'MainController::tentangkami');
$routes->get('/privacypolicy', 'MainController::privacy');
$routes->get('/termcondition', 'MainController::terms');

$routes->post('/ajukan_page_solusi', 'MainController::ajukan_page_solusi');
$routes->post('/ajukan_page_beranda', 'MainController::ajukan_page_beranda');
$routes->post('/ajukan_page_fitur', 'MainController::ajukan_page_fitur');
