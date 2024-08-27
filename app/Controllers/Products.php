<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function index(): string
    {
        return view('templates/header')
            . view('pages/create-product')
            . view('templates/footer');
    }
}
