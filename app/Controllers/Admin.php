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
        $productModel = model(ProductModel::class);
        $data['selected'] = 'product';

        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'image' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]|max_size[image,4096]'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $imageUpload = $this->request->getFile('image');
            $path = FCPATH . 'uploads/product/';
            $imageUpload->move($path);

            $productData = array(
                'status' => empty($this->request->getPost('status')) ? 'Waiting' : $this->request->getPost('status'),
                'category' => $this->request->getPost('category'),
                'name'  => $this->request->getPost('name'),
                'price' => $this->request->getPost('price'),
                'stock' => $this->request->getPost('stock'),
                'desc' => $this->request->getPost('desc'),
                'image' => $imageUpload->getName(),
            );

            $productModel->createProduct($productData);
            return redirect('admin/product')->with('success', 'Product created');
        }

        return view('templates/header', $data)
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

        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'category' => 'required',
            'stock' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $isImageValid = $validation->check('image', 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]|max_size[image,4096]');

            if ($isImageValid) {
                $imageUpload = $this->request->getFile('image');
                $path = FCPATH . 'uploads/product/';
                $image = $product["image"];
                unlink($path . $image);
                $imageUpload->move($path);
                $productData = array(
                    'status' => empty($this->request->getPost('status')) ? $product['status'] : $this->request->getPost('status'),
                    'category' => $this->request->getPost('category'),
                    'name'  => $this->request->getPost('name'),
                    'price' => $this->request->getPost('price'),
                    'stock' => $this->request->getPost('stock'),
                    'desc' => $this->request->getPost('desc'),
                    'image' => $imageUpload->getName(),
                );
            } else {
                $productData = array(
                    'status' => empty($this->request->getPost('status')) ? $product['status'] : $this->request->getPost('status'),
                    'category' => $this->request->getPost('category'),
                    'name'  => $this->request->getPost('name'),
                    'price' => $this->request->getPost('price'),
                    'stock' => $this->request->getPost('stock'),
                    'desc' => $this->request->getPost('desc')
                );
            }

            $productModel->updateProduct($id, $productData);
            return redirect('admin/product')->with('success', 'Product updated');
        }

        return view('templates/header', $data)
            . view('templates/admin/sidebar')
            . view('pages/admin/productByID')
            . view('templates/tail');
    }

    public function deleteProduct($id)
    {
        $productModel = model(ProductModel::class);
        $product = $productModel->getProduct($id);
        $productModel->deleteProduct($id);
        $path = FCPATH . 'uploads/product/';
        $image = $product["image"];
        unlink($path . $image);

        return redirect('admin/product')->with('success', 'Product deleted');
    }

    public function hero()
    {
        $heroModel = model(HeroModel::class);
        $hero = $heroModel->getHero();
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
