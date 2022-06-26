<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('area')->insert([
            'name_area'=> 'Việt Nam',
            'image_area' => '1636741312_area.png',
            'slug_area' => 'viet-nam',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('area')->insert([
            'name_area'=> 'K-POP',
            'image_area' => '1636741344_area.png',
            'slug_area' => 'k-pop',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('area')->insert([
            'name_area'=> 'US-UK',
            'image_area' => '1636741408_area.png',
            'slug_area' => 'us-uk',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
    }
}
