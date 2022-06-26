<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'songvedem',
            'email' => 'uchihaobitoloverin97@gmail.com',
            'password' => '$2y$10$bjJtV0QkvhaHIPeadyXeAuBKePMcTzRDlYGwebkzWu8jROHiJ5mpW',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
    }
}
