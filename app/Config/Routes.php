<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('home', 'MainController::index');
$routes->get('solusi', 'MainController::solusi');
$routes->get('fitur', 'MainController::fitur');
$routes->get('detail_fitur', 'MainController::detail_fitur');
$routes->get('tentangkami', 'MainController::tentangkami');