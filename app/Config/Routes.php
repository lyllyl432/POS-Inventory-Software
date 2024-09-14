<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//create product routes
$routes->get('product', 'Product::index');
$routes->get('product/table', 'Product::productListTable');
$routes->get('product/table/list', 'Product::productList');
$routes->post('add-product', 'Product::add');
$routes->post('edit-product', 'Product::edit');
$routes->post('delete-product', 'Product::delete');
// unit setting routes
$routes->get('unit-setting', 'Unitsetting::index');
$routes->post('add-unit', 'Unitsetting::add');
$routes->post('edit-unit', 'Unitsetting::edit');
$routes->post('delete-unit', 'Unitsetting::delete');
