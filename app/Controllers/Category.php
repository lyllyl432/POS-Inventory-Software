<?php

namespace App\Controllers;

class Category extends BaseController
{
    public function index(): string
    {
        return view('pages/settings/category');
    }
}
