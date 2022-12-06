<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Hero extends Seeder
{
    public function run()
    {
        $hero_data = [
            [
                'status' => 'approved',
                'title' => 'Enjoy the finest

							<strong class="block font-extrabold text-brown">
								Coffee in Bali.
							</strong>',
                'desc'  => 'Try our Coffee Latte, created with love and care to give you the best coffee experience.',
                'cta_title' => 'Order now',
                'cta_ref' => '/menu/1',
                'image' => 'https://images.unsplash.com/photo-1571658734974-e513dfb8b86b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=875&q=80',
            ],
            [
                'status' => 'approved',
                'title' => 'Prawn Salted Egg',
                'desc' => 'Fresh prawn with an eggcellent flavor of a salted egg.',
                'cta_title' => 'Try me',
                'cta_ref' => '/menu/2',
                'image' => 'https://images.unsplash.com/photo-1504309250229-4f08315f3b5c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            ],
            [
                'status' => 'approved',
                'title' => 'Want Some Matcha Latte?',
                'desc'    => 'We got a delicious and beautiful matcha latte that you can enjoy with every sip of it.',
                'cta_title' => 'Order me',
                'cta_ref' => '/menu/3',
                'image' => 'https://images.unsplash.com/photo-1561658286-ecb9fe9d8480?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            ]
        ];

        foreach ($hero_data as $data) {
            $this->db->table('hero')->insert($data);
        }
    }
}
