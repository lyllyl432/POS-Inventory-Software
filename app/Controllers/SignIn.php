<?php

namespace App\Controllers;

class SignIn extends BaseController
{
    protected $helpers = ['form'];
    public function index(): string
    {
        return view('pages/auth/signin');
    }
}
