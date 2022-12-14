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
        $path = FCPATH . 'uploads/product/';
        $image = $product["image"];
        $productModel->deleteProduct($id);
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
        $heroModel = model(HeroModel::class);
        $data['selected'] = 'hero';

        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'image' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]|max_size[image,4096]'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $imageUpload = $this->request->getFile('image');
            $path = FCPATH . 'uploads/hero/';
            $imageUpload->move($path);

            $heroData = array(
                'status' => empty($this->request->getPost('status')) ? 'Waiting' : $this->request->getPost('status'),
                'title'  => $this->request->getPost('title'),
                'desc'  => $this->request->getPost('desc'),
                'cta_title'  => $this->request->getPost('cta-title'),
                'cta_ref'  => $this->request->getPost('cta-ref'),
                'image' => $imageUpload->getName(),
            );

            $heroModel->createHero($heroData);
            return redirect('admin/hero')->with('success', 'Hero created');
        }

        return view('templates/header', $data)
            . view('templates/admin/sidebar')
            . view('pages/admin/newHero')
            . view('templates/tail');
    }

    public function updateHero($id)
    {
        $heroModel = model(HeroModel::class);
        $hero = $heroModel->getHero('all', $id);
        $data['hero'] = $hero;
        $data['selected'] = 'hero';

        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $isImageValid = $validation->check('image', 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]|max_size[image,4096]');

            if ($isImageValid) {
                $imageUpload = $this->request->getFile('image');
                $path = FCPATH . 'uploads/hero/';
                $image = $hero["image"];
                unlink($path . $image);
                $imageUpload->move($path);
                $heroData = array(
                    'status' => empty($this->request->getPost('status')) ? $hero['status'] : $this->request->getPost('status'),
                    'title'  => $this->request->getPost('title'),
                    'desc'  => $this->request->getPost('desc'),
                    'cta_title'  => $this->request->getPost('cta-title'),
                    'cta_ref'  => $this->request->getPost('cta-ref'),
                    'image' => $imageUpload->getName(),
                );
            } else {
                $heroData = array(
                    'status' => empty($this->request->getPost('status')) ? $hero['status'] : $this->request->getPost('status'),
                    'title'  => $this->request->getPost('title'),
                    'desc'  => $this->request->getPost('desc'),
                    'cta_title'  => $this->request->getPost('cta-title'),
                    'cta_ref'  => $this->request->getPost('cta-ref'),
                );
            }

            $heroModel->updateHero($id, $heroData);
            return redirect('admin/hero')->with('success', 'Hero updated');
        }

        return view('templates/header', $data)
            . view('templates/admin/sidebar')
            . view('pages/admin/heroByID')
            . view('templates/tail');
    }

    public function deleteHero($id)
    {
        $heroModel = model(HeroModel::class);
        $hero = $heroModel->getHero('all', $id);
        $path = FCPATH . 'uploads/hero/';
        $image = $hero["image"];
        unlink($path . $image);
        $heroModel->deleteHero($id);

        return redirect('admin/hero')->with('success', 'Hero deleted');
    }
}
