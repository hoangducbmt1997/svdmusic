<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('playlist')->insert([
            'name_playlist'=> 'Thiên hạ nghe gì',
            'image_playlist' => '1636397610_playlist_song.jpg',
            'description_playlist' => 'Mô tả',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
    }
}
