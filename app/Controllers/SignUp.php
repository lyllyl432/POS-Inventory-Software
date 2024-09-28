<?php

namespace App\Controllers;

class SignUp extends BaseController
{
    protected $helpers = ['form'];
    public function index(): string
    {
        return view('pages/auth/signup');
    }
}
