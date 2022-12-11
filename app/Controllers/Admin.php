<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Admin extends BaseController
{
    public function index()
    {
        return view('templates/header')
            . view('pages/admin/login')
            . view('templates/tail');
    }

    public function dashboard()
    {
        return view('templates/header')
            . view('pages/admin/dashboard')
            . view('templates/tail');
    }

    public function product()
    {
        $productModel = model(ProductModel::class);
        $product = $productModel->getProduct();
        $data['product'] = $product;
        $data['selected'] = 'product';

        return view('templates/header', $data)
            . view('templates/admin/sidebar')
            . view('pages/admin/product')
            . view('templates/tail');
    }
}
