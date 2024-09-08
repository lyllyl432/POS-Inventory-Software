<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('create-product', 'Product::index');
$routes->get('unit-setting', 'UnitSetting::index');
