<?php

namespace App\Controllers;

class UnitSetting extends BaseController
{
    public function index(): string
    {
        return view('pages/settings/unit-setting');
    }
    public function create() {}
}
