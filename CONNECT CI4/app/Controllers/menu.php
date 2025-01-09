<?php

namespace App\Controllers;

class menu extends BaseController
{
    public function index(): string
    {
        return view('menu/index');
    }

    public function sub(): string
    {
        return view('menu/submenu');
    }
}
