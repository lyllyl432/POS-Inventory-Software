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
$routes->get('unit', 'Unit::index');
//warehouse setting routes
$routes->get('warehouse', 'Warehouse::index');
//category setting routes
$routes->get('category', 'Category::index');
//brand setting routes
$routes->get('brand', 'Brand::index');
//currency setting routes
$routes->get('currency', 'Currency::index');
