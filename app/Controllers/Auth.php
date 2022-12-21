<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->userModel = new UserModel();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        //menampilkan halaman login
        return view('templates/header')
            . view('pages/login')
            . view('templates/tail');
    }

    public function register()
    {
        //menampilkan halaman register
        return view('templates/header')
            . view('pages/register')
            . view('templates/tail');
    }

    public function valid_register()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();

        //jalankan validasi
        $this->validation->run($data, 'register');

        //cek errornya
        $errors = $this->validation->getErrors();

        //jika ada error kembalikan ke halaman register
        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to('/register');
        }

        //jika tdk ada error 

        //buat salt
        $salt = uniqid('', true);

        //hash password digabung dengan salt
        $password = md5($data['password']) . $salt;

        //masukan data ke database
        $this->userModel->save([
            'username' => $data['username'],
            'password' => $password,
            'salt' => $salt,
            'fullname' => $data['fullname']
        ]);

        //arahkan ke halaman login
        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/login');
    }

    public function valid_login()
    {
        //ambil data dari form
        $data = $this->request->getPost();

        //ambil data user di database yang usernamenya sama 
        $user = $this->userModel->where('username', $data['username'])->first();

        //cek apakah username ditemukan
        if (!$user || $user['password'] != md5($data['password']) . $user['salt']) {
            session()->setFlashdata('salah', 'Username atau password salah');
            return redirect()->to('/login');
        } else {
            //jika benar, arahkan user masuk ke aplikasi 
            $sessLogin = [
                'isLogin' => true,
                'username' => $user['username'],
                'role' => $user['role'],
                'fullname' => $user['fullname']
            ];
            $this->session->set($sessLogin);

            if ($user['role'] === 'user') {
                return redirect()->to('/menu');
            }
            
            return redirect()->to('/admin');
        }
    }

    public function logout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to('/login');
    }
}
