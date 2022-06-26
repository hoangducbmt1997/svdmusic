<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account')->insert([
            'name'=> 'songvedem',
            'email' => 'uchihaobitoloverin97@gmail.com',
            'password' => '$2y$10$F28brLnKHDJI2agx6OlyiOHUPtkv.NiGQl8zVKfl9c18/p3.7IUYu',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
       
    }
}
