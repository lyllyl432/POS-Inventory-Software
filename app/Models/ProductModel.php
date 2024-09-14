<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_code';
    protected $allowedFields = ['product_code', 'product_name', 'category', 'brand', 'barcode_symbology', 'product_cost', 'product_price', 'product_unit', 'sales_unit', 'purchase_unit', 'stocks_alert', 'order_tax', 'tax_type'];
}
