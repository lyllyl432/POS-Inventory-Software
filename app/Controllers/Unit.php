<?php

namespace App\Controllers;

class Unit extends BaseController
{
    public function index(): string
    {
        return view('pages/settings/unit');
    }
}
