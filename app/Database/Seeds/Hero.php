<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Hero extends Seeder
{
    public function run()
    {
        $hero_data = [
            [
                'status' => 'Approved',
                'title' => 'Enjoy the finest

							<strong class="block font-extrabold text-brown">
								Coffee in Bali.
							</strong>',
                'desc'  => 'Try our Coffee Latte, created with love and care to give you the best coffee experience.',
                'cta_title' => 'Order now',
                'cta_ref' => '/menu/1',
                'image' => 'latte.webp',
            ],
            [
                'status' => 'Approved',
                'title' => 'Prawn Salted Egg',
                'desc' => 'Fresh prawn with an eggcellent flavor of a salted egg.',
                'cta_title' => 'Try me',
                'cta_ref' => '/menu/2',
                'image' => 'shrimp.webp',
            ],
            [
                'status' => 'Approved',
                'title' => 'Want Some Matcha Latte?',
                'desc'    => 'We got a delicious and beautiful matcha latte that you can enjoy with every sip of it.',
                'cta_title' => 'Order me',
                'cta_ref' => '/menu/3',
                'image' => 'matcha latte.webp',
            ]
        ];

        foreach ($hero_data as $data) {
            $this->db->table('hero')->insert($data);
        }
    }
}
