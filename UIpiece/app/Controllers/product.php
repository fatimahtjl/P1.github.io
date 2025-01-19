<?php

namespace App\Controllers;

use App\Models\ProductModel;

class product extends BaseController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $data['products'] = $this->productModel->findAll();
        return view('menu/index', $data);
    }

    public function sub($id)
    {
        $productModel = new ProductModel();
        $product = $productModel->get($id);
        return view('menu/submenu', ['product' => $product]);
    }

    public function search()
    {
        $keyword = $this->request->getGet('search');
        $productModel = new ProductModel();
        $products = $productModel->searchProducts($keyword);
        return view('menu/index', ['products' => $products, 'keyword' => $keyword]);
    }
}
