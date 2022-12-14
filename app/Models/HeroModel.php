<?php 

namespace App\Models;

use CodeIgniter\Model;

class HeroModel extends Model
{
    protected $table = 'hero';

    public function getHero($status = false)
    {
        if ($status === false) {
            return $this->findAll();
        }

        return $this->where(['status' => $status])->findAll();
    }

    public function createHero($data)
    {
        return $this->insert($data);
    }
}