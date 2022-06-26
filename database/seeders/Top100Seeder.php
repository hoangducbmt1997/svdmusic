<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Top100Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('top100')->insert([
            'name_top100'=> 'Top 100 Nhạc Trẻ',
            'image_top100' => '1646169440_top100_image.png',
            'image_gif_top100' => '1646169440_top100_image_gif.gif',
            'area_id' => '2',
            'link_top100' => '#',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('top100')->insert([
            'name_top100'=> 'Top100 Quê Hương',
            'image_top100' => '1646168223_top100_image.png',
            'image_gif_top100' => '1646168223_top100_image_gif.gif',
            'area_id' => '2',
            'link_top100' => '#',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('top100')->insert([
            'name_top100'=> 'Top100 Nhạc EDM',
            'image_top100' => '1646217628_top100_image.png',
            'image_gif_top100' => '1646217628_top100_image_gif.gif',
            'area_id' => '3',
            'link_top100' => '#',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('top100')->insert([
            'name_top100'=> 'Top 100 Hoa Ngữ',
            'image_top100' => '1646218152_top100_image.png',
            'image_gif_top100' => '1646218152_top100_image_gif.gif',
            'link_top100' => '#',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('top100')->insert([
            'name_top100'=> 'Top 100 Rap Việt',
            'image_top100' => '1646168549_top100_image.png',
            'image_gif_top100' => '1646168549_top100_image_gif.gif',
            'area_id' => '1',
            'link_top100' => '#',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('top100')->insert([
            'name_top100'=> 'Top 100 Cách Mạng',
            'image_top100' => '1646168670_top100_image.png',
            'image_gif_top100' => '1646168670_top100_image_gif.gif',
            'area_id' => '1',
            'link_top100' => '#',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);

        DB::table('top100')->insert([
            'name_top100'=> 'Top 100 Thiếu Nhi',
            'image_top100' => '1646219080_top100_image.png',
            'image_gif_top100' => '1646219080_top100_image_gif.gif',
            'area_id' => '1',
            'link_top100' => '#',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);

        DB::table('top100')->insert([
            'name_top100'=> 'Top 100 Trữ Tình',
            'image_top100' => '1646169064_top100_image.png',
            'image_gif_top100' => '1646169064_top100_image_gif.gif',
            'area_id' => '2',
            'link_top100' => '#',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);

        DB::table('top100')->insert([
            'name_top100'=> 'Top 100 Hàn Quốc',
            'image_top100' => '1646219495_top100_image.png',
            'image_gif_top100' => '1646219495_top100_image_gif.gif',
            'link_top100' => '#',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        
    }
}
