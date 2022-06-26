<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artist')->insert([
            'name_artist'=> 'Cukak',
            'image_artist' => '1646604266_artist.jpg',
            'slug_artist' => 'cukak',
            'area_id' => '2',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-03-06 22:04:26'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Vicetone',
            'image_artist' => '1636314841_artist.jpg',
            'slug_artist' => 'vicetone',
            'area_id' => '2',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-24 17:00:00'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'H2K',
            'image_artist' => '1636312534_artist.jpg',
            'slug_artist' => 'h2k',
            'area_id' => '2',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-24 17:00:00'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Duonng',
            'image_artist' => '1646641603_artist.jpg',
            'slug_artist' => 'duonng',
            'area_id' => '2',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-03-07 08:26:43'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Sơn Tùng MTP',
            'image_artist' => '1636733679_artist.jpg',
            'slug_artist' => 'son-tung-mtp',
            'area_id' => '2',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-24 17:00:00'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Đen Vâu',
            'image_artist' => '1636735853_artist.jpg',
            'slug_artist' => 'den-vau',
            'area_id' => '2',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Masew',
            'image_artist' => '1636735955_artist.jpg',
            'slug_artist' => 'masew',
            'area_id' => '2',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'The Fat Rat',
            'image_artist' => '1636736062_artist.jpg',
            'slug_artist' => 'the-fat-rat',
            'area_id' => '2',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Hòa Minzy',
            'image_artist' => '1636736243_artist.jpg',
            'slug_artist' => 'hoa-minzy',
            'area_id' => '2',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Bin Z',
            'image_artist' => '1636736297_artist.jpg',
            'slug_artist' => 'bin-z',
            'area_id' => '2',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Marshmello',
            'image_artist' => '1646210608_artist.jpg',
            'slug_artist' => 'marshmello',
            'area_id' => '2',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);

        DB::table('artist')->insert([
            'name_artist'=> 'Big Bang',
            'image_artist' => '1645632020_artist.jpg',
            'slug_artist' => 'big-bang',
            'area_id' => '2',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Jennie',
            'image_artist' => '1645630837_artist.jpg',
            'slug_artist' => 'jennie',
            'area_id' => '2',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'NUESt',
            'image_artist' => '1645632134_artist.jpg',
            'slug_artist' => 'nuest',
            'area_id' => '2',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Black Pink',
            'image_artist' => '1645631355_artist.jpg',
            'slug_artist' => 'black-pink',
            'area_id' => '2',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Avicii',
            'image_artist' => '1645444068_artist.jpg',
            'slug_artist' => 'avicii',
            'area_id' => '2',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Đức Phúc',
            'image_artist' => '1646132938_artist.jpg',
            'slug_artist' => 'duc-phuc',
            'area_id' => '2',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);

        DB::table('artist')->insert([
            'name_artist'=> 'Justatee',
            'image_artist' => '1646554349_artist.jpg',
            'slug_artist' => 'justatee',
            'area_id' => '1',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Tăng Duy Tân',
            'image_artist' => '1646555926_artist.jpg',
            'slug_artist' => 'tang-duy-tan',
            'area_id' => '1',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Jack',
            'image_artist' => '1646556334_artist.jpg',
            'slug_artist' => 'jack',
            'area_id' => '1',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Luis Fonsi',
            'image_artist' => '1646562278_artist.jpg',
            'slug_artist' => 'luis-fonsi',
            'area_id' => '3',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Erik',
            'image_artist' => '1646562334_artist.jpg',
            'slug_artist' => 'erik',
            'area_id' => '1',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Karik',
            'image_artist' => '1646562464_artist.jpg',
            'slug_artist' => 'karik',
            'area_id' => '1',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'MONSTAR',
            'image_artist' => '1646565186_artist.jpg',
            'slug_artist' => 'monstar',
            'area_id' => '1',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Rum',
            'image_artist' => '1646565464_artist.jpg',
            'slug_artist' => 'rum',
            'area_id' => '1',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);

        DB::table('artist')->insert([
            'name_artist'=> 'Maroon 5',
            'image_artist' => '1646565580_artist.jpg',
            'slug_artist' => 'maroon-5',
            'area_id' => '1',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);

        DB::table('artist')->insert([
            'name_artist'=> 'Kha',
            'image_artist' => '1646576738_artist.jpg',
            'slug_artist' => 'kha',
            'area_id' => '1',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('artist')->insert([
            'name_artist'=> 'Vũ',
            'image_artist' => '1646730313_artist.jpg',
            'slug_artist' => 'vu',
            'area_id' => '1',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-18 17:00:00',
            'updated_at'=>'2022-02-25'
        ]);
    }
}
