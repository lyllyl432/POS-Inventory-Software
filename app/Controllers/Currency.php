<?php

namespace App\Controllers;

class Currency extends BaseController
{
    public function index(): string
    {
        return view('pages/settings/currency');
    }
}
