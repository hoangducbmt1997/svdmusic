<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner')->insert([
            'name_banner'=> 'Night Jazz Show',
            'image_banner' => '1646152818_banner_song.jpg',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('banner')->insert([
            'name_banner'=> 'House Music',
            'image_banner' => '1646156220_banner_song.jpg',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('banner')->insert([
            'name_banner'=> 'EDM Night House',
            'image_banner' => '1646149559_banner_song.jpg',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
    }
}
