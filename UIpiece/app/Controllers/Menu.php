<?php

namespace App\Controllers;

use App\Models\modelMember;
use CodeIgniter\Controller;

;

class Menu extends BaseController
{

    protected $modelMember;
    public function index(): string
    {
        return view('menu/index');
    }
    public function submenu(): string
    {
        return view('menu/submenu');
    }
    public function cart()
    {
        return view('menu/cart');
    }

    public function __construct()
    {
        $this->modelMember = new \App\Models\modelMember();
    }

}

