<?php

namespace App\Controllers;

use App\Models\CartModel;
use CodeIgniter\Controller;

class Cart extends BaseController
{
    protected $cartModel;

    public function __construct()
    {
        $this->cartModel = new CartModel();
    }

    // Menampilkan halaman cart
    public function index()
    {
        $cartModel = new CartModel();
        $cart = $cartModel->getCart();
        return view('menu/cart', ['cart' => $cart]);

    }

    // Menambahkan barang ke keranjang
    public function add()
    {
        $productId = $this->request->getPost('product_id');

        $this->cartModel->addToCart($productId);
        return redirect()->to('/cart');
    }

    // Menghapus barang dari keranjang
    public function remove($id)
    {
        $this->cartModel->removeFromCart($id);
        return redirect()->to('/cart');
    }
}
