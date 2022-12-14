<?php 

namespace App\Models;

use CodeIgniter\Model;

class HeroModel extends Model
{
    protected $table = 'hero';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['status', 'title', 'desc', 'cta_title', 'cta_ref', 'image'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getHero($status = 'all', $id = false)
    {
        if ($id === false && $status === 'all') {
            return $this->findAll();
        } else if ($status === 'all') {
            return $this->where(['id' => $id])->first();
        }

        return $this->where(['status' => $status])->findAll();
    }

    public function createHero($data)
    {
        return $this->insert($data);
    }

    public function updateHero($id, $data)
    {
        return $this->update($id, $data);
    }
}