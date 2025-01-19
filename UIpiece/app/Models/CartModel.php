<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    protected $allowedFields = ['id', 'product_id', 'quantity'];

    public function getCart()
    {
        return $this->join('produk', 'produk.id = cart.product_id')
            ->select('produk.name, produk.price, cart.quantity, cart.id, (produk.price * cart.quantity) as subtotal')
            ->findAll();
    }


    public function addToCart($productId)
    {
        $muncul = $this->where('product_id', $productId)->first();

        if ($muncul) {
            $this->update($muncul['product_id'], ['quantity' => $muncul['quantity'] + 1]);
        } else {
            $this->insert(['product_id' => $productId, 'quantity' => 1]);
        }
    }

    public function removeFromCart($id)
    {
        $this->delete($id);
    }
}