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
                'image' => 'latte.webp',
            ],
            [
                'category' => 'Main Course',
                'status' => 'Available',
                'name' => 'Prawn Salted Egg',
                'desc'  => 'Fried prawn with salted egg sauce.',
                'price' => 20000,
                'image' => 'shrimp.webp',
            ],
            [
                'category' => 'Non-Coffee',
                'status' => 'Available',
                'name' => 'Matcha Latte',
                'desc'  => 'Matcha latte with beautiful latte art.',
                'price' => 20000,
                'image' => 'matcha latte.webp',
            ],
            [
                'category' => 'Coffee',
                'status' => 'Available',
                'name' => 'Latte 2',
                'desc'  => 'Coffee latte with beautiful latte art.',
                'price' => 15000,
                'image' => 'latte.webp',
            ],
            [
                'category' => 'Main Course',
                'status' => 'Available',
                'name' => 'Prawn Salted Egg 2',
                'desc'  => 'Fried prawn with salted egg sauce.',
                'price' => 20000,
                'image' => 'shrimp.webp',
            ],
            [
                'category' => 'Non-Coffee',
                'status' => 'Available',
                'name' => 'Matcha Latte 2',
                'desc'  => 'Matcha latte with beautiful latte art.',
                'price' => 20000,
                'image' => 'matcha latte.webp',
            ],
            [
                'category' => 'Coffee',
                'status' => 'Available',
                'name' => 'Latte 3',
                'desc'  => 'Coffee latte with beautiful latte art.',
                'price' => 15000,
                'image' => 'latte.webp',
            ],
            [
                'category' => 'Main Course',
                'status' => 'Available',
                'name' => 'Prawn Salted Egg 3',
                'desc'  => 'Fried prawn with salted egg sauce.',
                'price' => 20000,
                'image' => 'shrimp.webp',
            ],
        ];

        foreach ($product_data as $data) {
            $this->db->table('product')->insert($data);
        }
    }
}
