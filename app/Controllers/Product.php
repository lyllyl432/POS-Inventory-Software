<?php

namespace App\Controllers;

class Product extends BaseController
{
    protected $helpers = ['form'];
    protected $productModel;

    public function __construct()
    {
        $this->productModel = model('ProductModel');
    }

    public function index(): string
    {
        return view('pages/product/create-product');
    }
    //handle add product list
    public function add()
    {
        $data = [
            'product_code' => $this->request->getPost('product-code'),
            'product_name' => $this->request->getPost('product-name'),
            'category' => $this->request->getPost('category'),
            'brand' => $this->request->getPost('brand'),
            'barcode_symbology' => $this->request->getPost('barcode-symbology'),
            'product_cost' => $this->request->getPost('product-cost'),
            'product_price' => $this->request->getPost('product-price'),
            'product_unit' => $this->request->getPost('product-unit'),
            'purchase_unit' => $this->request->getPost('purchase-unit'),
            'stocks_alert' => $this->request->getPost('stocks-alert'),
            'order_tax' => $this->request->getPost('order-tax'),
            'tax_type' => $this->request->getPost('tax-type'),
        ];

        $rules = [
            'product_code' => 'required',
            'product_name' => 'required|is_unique[product.product_name]',
            'category' => 'required|max_length[30]',
            'brand' => 'required|max_length[30]',
            'barcode_symbology' => 'required|max_length[30]',
            'product_cost' => 'required|integer',
            'product_price' => 'required|integer',
            'product_unit' => 'required|max_length[10]',
            'purchase_unit' => 'required|max_length[10]',
            'stocks_alert' => 'required|max_length[20]',
            'order_tax' => 'required|max_length[20]',
            'tax_type' => 'required',
        ];
        if (!$this->validateData($data, $rules)) {
            return view('pages/product/failed', ['errors' => $this->validator->getErrors()]);
        }

        $validData  = $this->validator->getValidated();
        if (!$this->productModel->insert($validData, false)) {
            return view('pages/product/failed');
        }
        return view('pages/product/product-list');
    }
    //handle edit product list
    public function edit()
    {
        $product_code = $this->request->getPost('edit_product_code');
        $data = [
            'product_name' => $this->request->getPost('product_name'),
        ];
        $rules = [
            'product_name' => 'required|is_unique[product.product_name]',
        ];
        if (!$this->validateData($data, $rules)) {
            // exit(var_dump('hello world'));
            return view('pages/product/failed', ['errors' => $this->validator->getErrors()]);
        }

        $validData  = $this->validator->getValidated();
        // exit(var_dump($validData));
        $this->productModel->update($product_code, $validData);
        return $this->productListTable();
    }
    //handle delete product list
    public function delete()
    {
        $product_code = $this->request->getPost('product_code');
        $this->productModel->where('product_code', $product_code)->delete();
        return $this->productListTable();
    }
    //create product table template
    public function productListTable()
    {
        $products = $this->productModel->findAll();
        return view('pages/product/product-list-table', ['list' => $products]);
    }
    //create product list route
    public function productList()
    {
        return view('pages/product/product-list');
    }
}
