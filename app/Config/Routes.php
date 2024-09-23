<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//create product routes
$routes->get('product', 'Product::index');
$routes->get('product/table', 'Product::productListTable');
$routes->get('product/list', 'Product::productList');
$routes->post('create-product', 'Product::create');
$routes->post('update-product', 'Product::update');
$routes->post('delete-product', 'Product::delete');
// unit setting routes
$routes->get('unit', 'Unit::index');
$routes->post('create-unit', 'Unit::create');
$routes->post('update-unit', 'Unit::update');
$routes->post('delete-unit', 'Unit::delete');
$routes->get('unit/table', 'Unit::unitListTable');

//warehouse setting routes
$routes->get('warehouse', 'Warehouse::index');
$routes->post('create-warehouse', 'Warehouse::create');
$routes->post('update-warehouse', 'Warehouse::update');
$routes->post('delete-warehouse', 'Warehouse::delete');
$routes->post('warehouse/table', 'Warehouse::warehouseListTable');
$routes->post('warehouse/table/list', 'Warehouse::warehouseList');
//category setting routes
$routes->get('category', 'Category::index');
$routes->post('create-category', 'Category::create');
$routes->post('update-category', 'Category::update');
$routes->post('delete-category', 'Category::delete');
$routes->post('category/table', 'Category::categoryListTable');
$routes->post('category/table/list', 'Category::categoryList');
//brand setting routes
$routes->get('brand', 'Brand::index');
$routes->post('create-brand', 'Brand::create');
$routes->post('update-brand', 'Brand::update');
$routes->post('delete-brand', 'Brand::delete');
$routes->get('brand/table', 'Brand::brandListTable');
$routes->post('brand/table/list', 'Brand::brandList');
//currency setting routes
$routes->get('currency', 'Currency::index');
$routes->post('create-currency', 'Currency::create');
$routes->post('update-currency', 'Currency::update');
$routes->post('delete-currency', 'Currency::delete');
$routes->post('currency/table', 'Currency::currencyListTable');
$routes->post('currency/table/list', 'Currency::currencyList');
