<?php 

namespace App\Models;

use CodeIgniter\Model;

class HeroModel extends Model
{
    protected $table = 'hero';

    public function getHero()
    {
        return $this->findAll();
    }
}