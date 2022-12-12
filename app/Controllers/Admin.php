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

    public function newProduct()
    {
        return view('templates/header')
            . view('templates/admin/sidebar')
            . view('pages/admin/newProduct')
            . view('templates/tail');
    }

    public function updateProduct($id)
    {
        $productModel = model(ProductModel::class);
        $product = $productModel->getProduct($id);
        $data['product'] = $product;
        $data['selected'] = 'product';
        $reqBody = $this->request;

        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);
        $isDataValid = $validation->withRequest($reqBody)->run();

        if ($isDataValid) {
            $imageUpload = $this->request->getFile('image');

            if ($imageUpload->isValid()) {
                $path = '../public/images/uploads';
                $image = $product["image"];
                @unlink($path . $image);
                $imageUpload->move(WRITEPATH . $path);
                $data = array(
                    'category' => $this->request->getPost('category'),
                    'name'  => $this->request->getPost('name'),
                    'price' => $this->request->getPost('price'),
                    'status' => $this->request->getPost('status'),
                    'desc' => $this->request->getPost('desc'),
                    'image' => $imageUpload->getName(),
                );
            } else {
                $data = array(
                    'category' => $this->request->getPost('category'),
                    'name'  => $this->request->getPost('name'),
                    'price' => $this->request->getPost('price'),
                    'status' => $this->request->getPost('status'),
                    'desc' => $this->request->getPost('desc')
                );
            }
            $productModel->updateProduct($id, $data);
            return redirect('admin/product');
        }

        return view('templates/header', $data)
            . view('templates/admin/sidebar')
            . view('pages/admin/productByID')
            . view('templates/tail');
    }

    public function hero()
    {
        $heroModel = model(ProductModel::class);
        $hero = $heroModel->getProduct();
        $data['hero'] = $hero;
        $data['selected'] = 'hero';

        return view('templates/header', $data)
            . view('templates/admin/sidebar')
            . view('pages/admin/hero')
            . view('templates/tail');
    }

    public function newHero()
    {
        return view('templates/header')
        . view('templates/admin/sidebar')
        . view('pages/admin/newHero')
        . view('templates/tail');
    }

    public function heroByID($id)
    {
        $heroModel = model(ProductModel::class);
        $hero = $heroModel->getProduct($id);
        $data['hero'] = $hero;
        $data['selected'] = 'hero';

        return view('templates/header', $data)
            . view('templates/admin/sidebar')
            . view('pages/admin/heroByID')
            . view('templates/tail');
    }
}
