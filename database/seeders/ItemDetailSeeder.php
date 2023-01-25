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
            'name' => 'Steam $20',
            'description' => '$20 Steam Wallet',
            'price' => '20.000',
            'image' => 'steam$20.jpg',
            'stock' => 10
        ]);
    }
}
