<?php 

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';

    public function getProduct($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getProductWithLimit($amount, $status = false)
    {
        if ($status === false) {
            return $this->findAll($amount);
        }

        return $this->where(['status' => $status])->findAll($amount);
    }
}