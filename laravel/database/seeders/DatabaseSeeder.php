<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Produto;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProdutoSeeder::class);
        $this->call(UsuarioSeeder::class);

//Produto::factory(200)->create();
      // Usuario::factory(20)->create();

    }
}
