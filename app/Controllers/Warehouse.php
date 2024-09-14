<?php

namespace App\Controllers;

class Warehouse extends BaseController
{
    public function index(): string
    {
        return view('pages/settings/warehouse');
    }
}
