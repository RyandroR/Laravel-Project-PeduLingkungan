<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_details')->insert([
            [
            'name' => 'Steam $20',
            'description' => '$20 Steam Wallet',
            'price' => '20000',
            'image' => file_get_contents('storage\app\post-images\steam$20.jpg'),
            'stock' => 10
            ],
            [
                'name' => 'Steam $50',
                'description' => '$50 Steam Wallet',
                'price' => '50000',
                'image' => 'steam$50.jpg',
                'stock' => 10
            ],
            [
                'name' => 'itunes $50',
                'description' => '$50 itunes giftcard',
                'price' => '50000',
                'image' => 'itunes$50.jpg',
                'stock' => 10
            ],
            [
                'name' => 'itunes $600',
                'description' => '$600 itunes giftcard',
                'price' => '600000',
                'image' => 'itunes$600.jpg',
                'stock' => 10
            ]

        ]);
    }
}
