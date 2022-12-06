<?php

namespace App\Controllers;

use App\Models\HeroModel;

class Home extends BaseController
{
    public function index()
    {
        $model = model(HeroModel::class);

        $hero = $model->getHero();

        $filteredHero = array_filter(
            $hero, 
            fn ($obj) => isset($obj['status']) && $obj['status'] === 'approved'
        );

        $data['hero'] = $filteredHero;

        return view('templates/header', $data)
            . view('pages/home')
            . view('templates/footer');
    }
}
