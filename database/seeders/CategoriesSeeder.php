<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Eletrônicos', 'slug' => 'eletronicos'],
            ['name' => 'Móveis', 'slug' => 'moveis'],
            ['name' => 'Informática', 'slug' => 'informatica'],
            ['name' => 'Eletrodomésticos', 'slug' => 'eletrodomesticos'],
            ['name' => 'Imóveis', 'slug' => 'imoveis'],
            ['name' => 'Veículos', 'slug' => 'veiculos'],
            ['name' => 'Moda', 'slug' => 'moda'],
            ['name' => 'Esportes', 'slug' => 'esportes'],
            ['name' => 'Livros', 'slug' => 'livros'],
            ['name' => 'Brinquedos', 'slug' => 'brinquedos'],
        ]);
    }
}
