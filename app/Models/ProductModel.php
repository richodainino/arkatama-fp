<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'category', 'status', 'price', 'desc', 'image'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

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

    public function updateProduct($id, $data)
    {
        return $this->update($id, $data);
    }
}
