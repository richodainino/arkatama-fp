<?php

namespace App\Controllers;

use App\Models\HeroModel;
use App\Models\ProductModel;

class Home extends BaseController
{
    public function index()
    {
        $model = model(HeroModel::class);

        $productModel = model(ProductModel::class);
        $product = $productModel->getProductWithLimit(8, 'available');
        $data['product'] = $product;

        return view('templates/header', $data)
            . view('pages/home')
            . view('templates/footer');
    }
}
