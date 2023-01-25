<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CarrinhodecompraSeeder extends Seeder
{
    /**
     * Execute banco de dados.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carrinhodecompras')->insert([
            'status' => 'Pedding ',
            'product_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('carrinhodecompras')->insert([
            'status' => 'Pedding ',
            'product_id' => 2,
            'user_id' => 2,
        ]);

        DB::table('carrinhodecompras')->insert([
            'status' => 'Pedding ',
            'product_id' => 3,
            'user_id' => 3,
        ]);


        DB::table('carrinhodecompras')->insert([
            'status' => 'Pedding ',
            'product_id' => 4,
            'user_id' => 4,
        ]);

        DB::table('carrinhodecompras')->insert([
            'status' => 'Pedding ',
            'product_id' => 5,
            'user_id' => 5,
        ]);

        DB::table('carrinhodecompras')->insert([
            'status' => 'Pedding ',
            'product_id' => 6,
            'user_id' => 6,
        ]);


        DB::table('carrinhodecompras')->insert([
            'status' => 'Pedding ',
            'product_id' => 7,
            'user_id' => 7,
        ]);

        DB::table('carrinhodecompras')->insert([
            'status' => 'Pedding ',
            'product_id' => 8,
            'user_id' => 8,
        
        ]);DB::table('carrinhodecompras')->insert([
            'status' => 'Pedding ',
            'product_id' => 9,
            'user_id' => 9,
        ]);


        DB::table('carrinhodecompras')->insert([
            'status' => 'Pedding ',
            'product_id' => 10,
            'user_id' => 10,
        ]);


    }
}
