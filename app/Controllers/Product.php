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
    public function create()
    {
        $data = [
            'product_code' => $this->request->getPost('product_code'),
            'product_name' => $this->request->getPost('product_name'),
            'category' => $this->request->getPost('category'),
            'brand' => $this->request->getPost('brand'),
            'barcode_symbology' => $this->request->getPost('barcode_symbology'),
            'product_cost' => $this->request->getPost('product_cost'),
            'product_price' => $this->request->getPost('product_price'),
            'product_unit' => $this->request->getPost('product_unit'),
            'sales_unit' => $this->request->getPost('sales_unit'),
            'purchase_unit' => $this->request->getPost('purchase_unit'),
            'stocks_alert' => $this->request->getPost('stocks_alert'),
            'order_tax' => $this->request->getPost('order_tax'),
            'tax_type' => $this->request->getPost('tax_type'),
        ];
        $rules = [
            'product_code' => 'required',
            'product_name' => 'required|is_unique[product.product_name]',
            'category' => 'required|max_length[30]',
            'brand' => 'required|max_length[30]',
            'barcode_symbology' => 'required|max_length[30]',
            'sales_unit' => 'required|max_length[20]',
            'product_cost' => 'required|integer',
            'product_price' => 'required|integer',
            'product_unit' => 'required|max_length[10]',
            'purchase_unit' => 'required|max_length[10]',
            'stocks_alert' => 'required|integer',
            'order_tax' => 'integer',
            'tax_type' => 'max_length[20]',
        ];
        if (!$this->validateData($data, $rules)) {
            exit(var_dump($this->validator->getErrors())); //to change
        }

        $validData  = $this->validator->getValidated();
        if (!$this->productModel->insert($validData, false)) {
            exit(var_dump($this->validator->getErrors())); //to change
        }
        return view('pages/product/product-list');
    }
    //handle edit product list
    public function update()
    {
        $product_code = $this->request->getPost('product_code');

        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'category' => $this->request->getPost('category'),
            'brand' => $this->request->getPost('brand'),
            'barcode_symbology' => $this->request->getPost('barcode_symbology'),
            'product_cost' => $this->request->getPost('product_cost'),
            'product_price' => $this->request->getPost('product_price'),
            'product_unit' => $this->request->getPost('product_unit'),
            'sales_unit' => $this->request->getPost('sales_unit'),
            'purchase_unit' => $this->request->getPost('purchase_unit'),
            'stocks_alert' => $this->request->getPost('stocks_alert'),
            'order_tax' => $this->request->getPost('order_tax'),
            'tax_type' => $this->request->getPost('tax_type'),
        ];


        $rules = [
            'product_name' => 'required|is_unique[product.product_name]',
            'category' => 'required|max_length[30]',
            'brand' => 'required|max_length[30]',
            'barcode_symbology' => 'required|max_length[30]',
            'sales_unit' => 'required|max_length[20]',
            'product_cost' => 'required|integer',
            'product_price' => 'required|integer',
            'product_unit' => 'required|max_length[10]',
            'purchase_unit' => 'required|max_length[10]',
            'stocks_alert' => 'required|integer',
            'order_tax' => 'integer',
            'tax_type' => 'max_length[20]',
        ];
        if (!$this->validateData($data, $rules)) {
            return $this->response->setJSON(['message' => 'error']);
        }

        $validData  = $this->validator->getValidated();
        $this->productModel->update($product_code, $validData);
        return $this->response->setJSON(['message' => 'success', 'value' => $this->productListTable()]);
    }
    //handle delete product list
    public function delete()
    {
        $product_code = $this->request->getPost('primary_key');
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
