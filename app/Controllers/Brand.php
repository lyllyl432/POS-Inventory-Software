<?php

namespace App\Controllers;

class Brand extends BaseController
{
    public function index(): string
    {
        return view('pages/settings/brand');
    }
}
