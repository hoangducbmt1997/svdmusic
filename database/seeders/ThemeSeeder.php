<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theme')->insert([
            'name_theme'=> 'WORK OUT',
            'image_theme' => '1644941052_theme_song.jpg',
            'link_theme' => '#',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('theme')->insert([
            'name_theme'=> 'GAMMING',
            'image_theme' => '1644941091_theme_song.jpg',
            'link_theme' => '#',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('theme')->insert([
            'name_theme'=> 'TIỆC TÙNG',
            'image_theme' => '1644941132_theme_song.jpg',
            'link_theme' => '#',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('theme')->insert([
            'name_theme'=> 'THƯ GIÃN',
            'image_theme' => '1644941158_theme_song.jpg',
            'link_theme' => '#',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('theme')->insert([
            'name_theme'=> 'YO GA',
            'image_theme' => '1644941187_theme_song.jpg',
            'link_theme' => '#',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('theme')->insert([
            'name_theme'=> 'DU LỊCH',
            'image_theme' => '1644941224_theme_song.jpg',
            'link_theme' => '#',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
    }
}
