<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
        [
            'name' => 'Boné',
            'price' => 59.9,
            'quantity' => 20,
        ],[
            'name' => 'Stick',
            'price' => 122.50,
            'quantity' => 50,
        ],[
            'name' => 'Setve',
            'price' => 13.0,
            'quantity' => 18,
        ],[
            'name' => 'Alex',
            'price' => 17.2,
            'quantity' => 14,
        ]]);
    }
}
