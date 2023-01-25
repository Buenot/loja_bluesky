<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Execute banco de dados.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name_product' => 'Camiseta preta',
            'description' => 'Logo branco',
            'category' => 'Camisetas',
            'price' => '60',
        ]);
        DB::table('products')->insert([
            'name_product' => 'Camiseta preta',
            'description' => 'Logo rosa ',
            'category' => 'Camisetas',
            'price' => '50',
        ]);
        DB::table('products')->insert([
            'name_product' => 'Camiseta preta e vermelha ',
            'description' => 'Logo preta',
            'category' => 'Camisetas',
            'price' => '80',
        ]);
        DB::table('products')->insert([
            'name_product' => 'Camiseta Amarela',
            'description' => 'Logo preta',
            'category' => 'Camisetas',
            'price' => '80',
        ]);

        DB::table('products')->insert([
            'name_product' => 'Moletom preto',
            'description' => 'Logo branca ',
            'category' => 'Moletons',
            'price' => '150',
        ]);

        DB::table('products')->insert([
            'name_product' => 'Moletom laranja',
            'description' => 'Logo preta',
            'category' => 'Moletons',
            'price' => '120',
        ]);

        DB::table('products')->insert([
            'name_product' => 'Moletom branco',
            'description' => 'Carpa ',
            'category' => 'Moletons',
            'price' => '120',
        ]);

        DB::table('products')->insert([
            'name_product' => 'Moletom azul e mostarda',
            'description' => 'Logo azul e branca',
            'category' => 'Moletons',
            'price' => '100',
        ]);

        DB::table('products')->insert([
            'name_product' => 'Touca verde',
            'description' => 'Logo verde ',
            'category' => 'Toucas',
            'price' => '60',
        ]);

        DB::table('products')->insert([
            'name_product' => 'Touca preta',
            'description' => 'Logo cinza  ',
            'category' => 'Toucas',
            'price' => '60',
        ]);

        DB::table('products')->insert([
            'name_product' => 'Touca azul',
            'description' => 'logo azul',
            'category' => 'Toucas',
            'price' => '60',
        ]);

        DB::table('products')->insert([
            'name_product' => 'Touca amarela',
            'description' => 'Logo amarelo',
            'category' => 'Toucas',
            'price' => '60',
        ]);

    }
}
