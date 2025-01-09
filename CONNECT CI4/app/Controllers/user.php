<?php

namespace App\Controllers;

class user extends BaseController
{
    public function index(): string
    {
        return view('user/index');
    }

    public function menu(): string
    {
        return view('user/menu');
    }
}
