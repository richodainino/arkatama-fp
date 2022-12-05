<?php

namespace App\Controllers;

use App\Models\HeroModel;

class Home extends BaseController
{
    public function index()
    {
        $model = model(HeroModel::class);

        $data['hero'] = $model->getHero();

        return view('templates/header', $data)
            . view('pages/home')
            . view('templates/footer');
    }
}
