<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'price', 'stock'];

    public function get($id)
    {
        return $this->where('id', $id)->first(); // Misalnya mengambil data produk dengan ID
    }

    public function searchProducts($keyword)
    {
        return $this->like('name', $keyword)
            //->orLike('name', $keyword) // Jika ada kolom deskripsi 
            ->findAll();
    }

}
