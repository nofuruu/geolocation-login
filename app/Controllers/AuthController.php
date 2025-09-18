<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function login()
    {
        $data['title'] = 'Login Page';
        return view('login', $data);
    }
}
