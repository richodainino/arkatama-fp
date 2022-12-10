<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Admin extends BaseController
{
    public function index()
    {
        return view('templates/header')
            . view('admin/login')
            . view('templates/tail');
    }

    public function dashboard()
    {
        $productModel = model(ProductModel::class);
        $product = $productModel->getProduct();
        $data['product'] = $product;

        return view('templates/header', $data)
            . view('admin/dashboard')
            . view('templates/tail');
    }
}
