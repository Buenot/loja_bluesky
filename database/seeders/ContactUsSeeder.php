<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ContactUsSeeder extends Seeder
{
    /**
     * Execute banco de dados.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Taina '.Str::random(3),
            'email' => 'taina.'.Str::random(3).'@gmail.com',
            'descriptioncontact' => 'Outros',
            'description' => 'Minha compra.'.Str::random(10),
        ]);
    }
}
