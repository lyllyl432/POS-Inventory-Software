<?php

namespace App\Controllers;

class Unitsetting extends BaseController
{
    public function index(): string
    {
        return view('pages/settings/unit-setting');
    }
    public function create() {}
}
