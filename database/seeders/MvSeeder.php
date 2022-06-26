<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mv')->insert([
            'name_mv'=> 'Độ tộc 2',
            'name_artist' => 'Độ Mixi, Pháo',
            'image_mv' => '1646588498_mv_song.jpg',
            'song_id' => '14',
            'link_mv' => 'https://www.youtube.com/embed/Llw9Q6akRo4',
            'song_id' => '13',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('mv')->insert([
            'name_mv'=> 'Lạc Trôi',
            'name_artist' => 'Sơn Tùng MTP',
            'image_mv' => '1646577100_mv_song.jpg',
            'song_id' => '4',
            'link_mv' => 'https://www.youtube.com/embed/Llw9Q6akRo4',
            'song_id' => '10',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('mv')->insert([
            'name_mv'=> 'Đi về nhà',
            'name_artist' => 'Đen Vâu, Justatee',
            'image_mv' => '1646588578_mv_song.jpg',
            'song_id' => '15',
            'link_mv' => 'https://www.youtube.com/embed/nLXSFAFDd6Q',
            'song_id' => '30',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('mv')->insert([
            'name_mv'=> 'Có hẹn với thanh xuân',
            'name_artist' => 'MONSTAR',
            'image_mv' => '1646588706_mv_song.jpg',
            'link_mv' => 'https://www.youtube.com/embed/IDksv0Z-dTk',
            'song_id' => '31',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
    }
}
