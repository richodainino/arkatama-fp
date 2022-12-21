<?php

namespace App\Controllers;

use App\Models\HeroModel;
use App\Models\ProductModel;

class User extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }

    public function index()
    {
        $heroModel = model(HeroModel::class);
        $hero = $heroModel->getHero('approved');
        $data['hero'] = $hero;

        $productModel = model(ProductModel::class);
        $product = $productModel->getProductWithLimit(8, 'available', 'approved');
        $data['product'] = $product;

        return view('templates/header', $data)
            . view('templates/user/navbar')
            . view('pages/user/home')
            . view('templates/user/footer')
            . view('templates/tail');
    }

    public function menu()
    {
        $productModel = model(ProductModel::class);
        $product = $productModel->getProduct();
        $data['product'] = $product;

        return view('templates/header', $data)
            . view('templates/user/navbar')
            . view('pages/user/menu')
            . view('templates/user/footer')
            . view('templates/tail');
    }

    public function specificMenu($id)
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/login');
        }

        $productModel = model(ProductModel::class);
        $product = $productModel->getProduct();
        $data['product'] = $product;

        return view('templates/header', $data)
            . view('templates/user/navbar')
            . view('pages/user/menu')
            . view('templates/user/footer')
            . view('templates/tail');
    }
}
