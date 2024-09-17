<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitModel extends Model
{
    protected $table = 'unit';
    protected $primaryKey = 'id';
    protected $allowedFields = ['unit_name', 'unit_short_name'];
}
