<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Product extends Seeder
{
    public function run()
    {
        $product_data = [
            [
                'category' => 'Coffee',
                'status' => 'Available',
                'name' => 'Latte',
                'desc'  => 'Coffee latte with beautiful latte art.',
                'price' => 15000,
                'image' => 'https://images.unsplash.com/photo-1571658734974-e513dfb8b86b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=875&q=80',
            ],
            [
                'category' => 'Main Course',
                'status' => 'Available',
                'name' => 'Prawn Salted Egg',
                'desc'  => 'Fried prawn with salted egg sauce.',
                'price' => 20000,
                'image' => 'https://images.unsplash.com/photo-1504309250229-4f08315f3b5c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            ],
            [
                'category' => 'Non-Coffee',
                'status' => 'Available',
                'name' => 'Matcha Latte',
                'desc'  => 'Matcha latte with beautiful latte art.',
                'price' => 20000,
                'image' => 'https://images.unsplash.com/photo-1561658286-ecb9fe9d8480?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            ],
            [
                'category' => 'Coffee',
                'status' => 'Available',
                'name' => 'Latte 2',
                'desc'  => 'Coffee latte with beautiful latte art.',
                'price' => 15000,
                'image' => 'https://images.unsplash.com/photo-1571658734974-e513dfb8b86b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=875&q=80',
            ],
            [
                'category' => 'Main Course',
                'status' => 'Available',
                'name' => 'Prawn Salted Egg 2',
                'desc'  => 'Fried prawn with salted egg sauce.',
                'price' => 20000,
                'image' => 'https://images.unsplash.com/photo-1504309250229-4f08315f3b5c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            ],
            [
                'category' => 'Non-Coffee',
                'status' => 'Available',
                'name' => 'Matcha Latte 2',
                'desc'  => 'Matcha latte with beautiful latte art.',
                'price' => 20000,
                'image' => 'https://images.unsplash.com/photo-1561658286-ecb9fe9d8480?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            ],
            [
                'category' => 'Coffee',
                'status' => 'Available',
                'name' => 'Latte 3',
                'desc'  => 'Coffee latte with beautiful latte art.',
                'price' => 15000,
                'image' => 'https://images.unsplash.com/photo-1571658734974-e513dfb8b86b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=875&q=80',
            ],
            [
                'category' => 'Main Course',
                'status' => 'Available',
                'name' => 'Prawn Salted Egg 3',
                'desc'  => 'Fried prawn with salted egg sauce.',
                'price' => 20000,
                'image' => 'https://images.unsplash.com/photo-1504309250229-4f08315f3b5c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            ],
        ];

        foreach ($product_data as $data) {
            $this->db->table('product')->insert($data);
        }
    }
}
