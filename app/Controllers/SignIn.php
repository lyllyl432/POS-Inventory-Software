<?php

namespace App\Controllers;

class SignIn extends BaseController
{
    public function index(): string
    {
        return view('pages/auth/signin');
    }
}
