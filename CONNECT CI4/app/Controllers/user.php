<?php

namespace App\Controllers;

class user extends BaseController
{
    public function index(): string
    {
        return view('user/index');
    }

    public function dashboard(): string
    {
        return view('user/dashboard');
    }
}
