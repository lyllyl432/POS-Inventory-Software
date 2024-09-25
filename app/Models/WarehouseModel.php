<?php

namespace App\Models;

use CodeIgniter\Model;

class WarehouseModel extends Model
{
    protected $table = 'warehouse';
    protected $primaryKey = 'id';
    protected $allowedFields = ['warehouse_name', 'warehouse_phone', 'warehouse_country', 'warehouse_city', 'warehouse_email', 'warehouse_zip_code'];
}
