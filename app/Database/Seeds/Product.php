<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Product extends Seeder
{
    public function run()
    {
        $product_data = [
            [
                'status' => 'Approved',
                'category' => 'Coffee',
                'stock' => 'Available',
                'name' => 'Latte',
                'desc'  => 'Coffee latte with beautiful latte art.',
                'price' => 15000,
                'image' => 'latte.webp',
            ],
            [
                'status' => 'Approved',
                'category' => 'Main Course',
                'stock' => 'Available',
                'name' => 'Prawn Salted Egg',
                'desc'  => 'Fried prawn with salted egg sauce.',
                'price' => 20000,
                'image' => 'shrimp.webp',
            ],
            [
                'status' => 'Approved',
                'category' => 'Non-Coffee',
                'stock' => 'Available',
                'name' => 'Matcha Latte',
                'desc'  => 'Matcha latte with beautiful latte art.',
                'price' => 20000,
                'image' => 'matcha latte.webp',
            ],
            [
                'status' => 'Approved',
                'category' => 'Coffee',
                'stock' => 'Available',
                'name' => 'Latte 2',
                'desc'  => 'Coffee latte with beautiful latte art.',
                'price' => 15000,
                'image' => 'latte 2.webp',
            ],
            [
                'status' => 'Approved',
                'category' => 'Main Course',
                'stock' => 'Available',
                'name' => 'Prawn Salted Egg 2',
                'desc'  => 'Fried prawn with salted egg sauce.',
                'price' => 20000,
                'image' => 'shrimp 2.webp',
            ],
            [
                'status' => 'Approved',
                'category' => 'Non-Coffee',
                'stock' => 'Available',
                'name' => 'Matcha Latte 2',
                'desc'  => 'Matcha latte with beautiful latte art.',
                'price' => 20000,
                'image' => 'matcha latte 2.webp',
            ],
            [
                'status' => 'Approved',
                'category' => 'Coffee',
                'stock' => 'Available',
                'name' => 'Latte 3',
                'desc'  => 'Coffee latte with beautiful latte art.',
                'price' => 15000,
                'image' => 'latte 3.webp',
            ],
            [
                'status' => 'Approved',
                'category' => 'Main Course',
                'stock' => 'Available',
                'name' => 'Prawn Salted Egg 3',
                'desc'  => 'Fried prawn with salted egg sauce.',
                'price' => 20000,
                'image' => 'shrimp 3.webp',
            ],
            [
                'status' => 'Approved',
                'category' => 'Non-Coffee',
                'stock' => 'Available',
                'name' => 'Matcha Latte 3',
                'desc'  => 'Matcha latte with beautiful latte art.',
                'price' => 20000,
                'image' => 'matcha latte 3.webp',
            ],
        ];

        foreach ($product_data as $data) {
            $this->db->table('product')->insert($data);
        }
    }
}
