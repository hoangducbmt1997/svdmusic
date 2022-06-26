<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name_category'=> 'EDM Remix',
            'image_category' => '1646208558_category_image.png',
            'image_gif_category' => '1646208558_category_image_gif.gif',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('category')->insert([
            'name_category'=> 'Cảm hứng công việc',
            'image_category' => '1646208519_category_image.png',
            'image_gif_category' => '1646208519_category_image_gif.gif',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('category')->insert([
            'name_category'=> 'Nhạc Trẻ',
            'image_category' => '1646208462_category_image.png',
            'image_gif_category' => '1646208462_category_image_gif.gif',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('category')->insert([
            'name_category'=> 'Mix Piano Classic',
            'image_category' => '1646208489_category_image.png',
            'image_gif_category' => '1646208489_category_image_gif.gif',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('category')->insert([
            'name_category'=> 'Trap Remix',
            'image_category' => '1646208394_category_image.png',
            'image_gif_category' => '1646208394_category_image_gif.gif',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('category')->insert([
            'name_category'=> 'Nhạc Gitar Hòa Tấu',
            'image_category' => '1646208327_category_image.png',
            'image_gif_category' => '1646208327_category_image_gif.gif',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
        
        DB::table('category')->insert([
            'name_category'=> 'Tropical thư giãn',
            'image_category' => '1646208346_category_image.png',
            'image_gif_category' => '1646208346_category_image_gif.gif',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-19',
            'updated_at'=>'2022-02-25'
        ]);
    }
}
