<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('song')->insert([
            'name_song'=> 'Tell Ur Mom',
            'image_song' => 'Tell Ur Mom.png',
            'image_bannersong' => 'Tell Ur Mom_banner.png',
            'link_lyrics' => 'Tell Ur Mom.lrc',
            'link_mp3' => 'Tell Ur Mom.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '1',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-07',
            'updated_at'=>'2022-02-23'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Hỏi vợ ngoại thành',
            'image_song' => 'Hỏi vợ ngoại thành.jpg',
            'image_bannersong' => 'Hỏi vợ ngoại thành_banner.jpg',
            'link_lyrics' => 'Hỏi vợ ngoại thành.lrc',
            'link_mp3' => 'Hỏi vợ ngoại thành.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '3',
            'top100_id' => '2',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-08',
            'updated_at'=>'2022-03-02'
        ]);
        DB::table('song')->insert([
            'name_song'=> '3107',
            'image_song' => '3107.jpg',
            'image_bannersong' => '3107_banner.jpg',
            'link_lyrics' => '3107.lrc',
            'link_mp3' => '3107.mp3',
            'area_id' => '1',
            'category_id' => '3',
            'artist_id' => '4',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-09',
            'updated_at'=>'2022-02-28'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Lạc Trôi',
            'image_song' => 'Lạc Trôi.jpg',
            'image_bannersong' => 'Lạc Trôi_banner.jpg',
            'link_lyrics' => 'Lạc Trôi.lrc',
            'link_mp3' => 'Lạc Trôi.mp3',
            'area_id' => '1',
            'category_id' => '3',
            'artist_id' => '5',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-09',
            'updated_at'=>'2022-02-23'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Nevada',
            'image_song' => 'Nevada.jpg',
            'image_bannersong' => 'Nevada_banner.jpg',
            'link_lyrics' => 'Nevada.lrc',
            'link_mp3' => 'Nevada.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '2',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-13',
            'updated_at'=>'2022-03-01'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Bạc Phận Remix',
            'image_song' => 'Bạc Phận Remix.jpg',
            'image_bannersong' => 'Bạc Phận Remix_banner.jpg',
            'link_lyrics' => 'Bạc Phận Remix.lrc',
            'link_mp3' => 'Bạc Phận Remix.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '7',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-13',
            'updated_at'=>'2022-03-02'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Watting For Love',
            'image_song' => 'Watting For Love.jpg',
            'image_bannersong' => 'Watting For Love_banner.jpg',
            'link_lyrics' => 'Watting For Love.lrc',
            'link_mp3' => 'Watting For Love.mp3',
            'area_id' => '3',
            'category_id' => '1',
            'artist_id' => '16',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-13',
            'updated_at'=>'2022-03-01'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Alone',
            'image_song' => 'Alone.jpg',
            'image_bannersong' => 'Alone_banner.jpg',
            'link_lyrics' => 'Alone.lrc',
            'link_mp3' => 'Alone.mp3',
            'area_id' => '3',
            'category_id' => '1',
            'artist_id' => '11',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-13',
            'updated_at'=>'2022-02-23'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Despacito',
            'image_song' => 'Despacito.jpg',
            'image_bannersong' => 'Despacito_banner.jpg',
            'link_lyrics' => 'Despacito.lrc',
            'link_mp3' => 'Despacito.mp3',
            'area_id' => '3',
            'category_id' => '1',
            'artist_id' => '21',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-13',
            'updated_at'=>'2022-02-23'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Solo',
            'image_song' => 'Solo.jpg',
            'image_bannersong' => 'Solo_banner.jpg',
            'link_lyrics' => 'Solo.lrc',
            'link_mp3' => 'Solo.mp3',
            'area_id' => '1',
            'category_id' => '3',
            'artist_id' => '13',
            'top100_id' => '9',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-13',
            'updated_at'=>'2022-03-01'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'FACE',
            'image_song' => 'FACE.jpg',
            'image_bannersong' => 'FACE_banner.jpg',
            'link_lyrics' => 'FACE.lrc',
            'link_mp3' => 'FACE.mp3',
            'area_id' => '1',
            'category_id' => '3',
            'artist_id' => '14',
            'top100_id' => '9',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-13',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'How you like that',
            'image_song' => 'How you like that.jpg',
            'image_bannersong' => 'How you like that_banner.jpg',
            'link_lyrics' => 'How you like that.lrc',
            'link_mp3' => 'How you like that.mp3',
            'area_id' => '1',
            'category_id' => '3',
            'artist_id' => '15',
            'top100_id' => '9',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-13',
            'updated_at'=>'2022-02-23'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Haru Haru',
            'image_song' => 'Haru Haru.jpg',
            'image_bannersong' => 'Haru Haru_banner.jpg',
            'link_lyrics' => 'Haru Haru.lrc',
            'link_mp3' => 'Haru Haru.mp3',
            'area_id' => '1',
            'category_id' => '3',
            'artist_id' => '12',
            'top100_id' => '9',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-13',
            'updated_at'=>'2022-02-23'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Độ tộc 2 Remix',
            'image_song' => 'Độ tộc 2 Remix.jpg',
            'image_bannersong' => 'Độ tộc 2 Remix_banner.jpg',
            'link_lyrics' => 'Độ tộc 2 Remix.lrc',
            'link_mp3' => 'Độ tộc 2 Remix.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '1',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-20',
            'updated_at'=>'2022-02-27'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Đường tôi chở em về',
            'image_song' => 'Đường tôi chở em về.jpg',
            'image_bannersong' => 'Đường tôi chở em về_banner.jpg',
            'link_lyrics' => 'Đường tôi chở em về.lrc',
            'link_mp3' => 'Đường tôi chở em về.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '1',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-23',
            'updated_at'=>'2022-02-27'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Ai hát cho em nghe Remix',
            'image_song' => 'Ai hát cho em nghe Remix.jpg',
            'image_bannersong' => 'Ai hát cho em nghe Remix_banner.jpg',
            'link_lyrics' => 'Ai hát cho em nghe Remix.lrc',
            'link_mp3' => 'Ai hát cho em nghe Remix.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '1',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-27',
            'updated_at'=>'2022-03-01'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Cũng đành thôi',
            'image_song' => 'Cũng đành thôi.jpg',
            'image_bannersong' => 'Cũng đành thôi_banner.jpg',
            'link_lyrics' => 'Cũng đành thôi.lrc',
            'link_mp3' => 'Cũng đành thôi.mp3',
            'area_id' => '1',
            'category_id' => '3',
            'artist_id' => '17',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-03-01',
            'updated_at'=>'2022-03-02'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Siren Remix',
            'image_song' => 'Siren Remix.jpg',
            'image_bannersong' => 'Siren Remix_banner.jpg',
            'link_lyrics' => 'Siren Remix.lrc',
            'link_mp3' => 'Siren Remix.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '1',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-03-02',
            'updated_at'=>'2022-03-03'
        ]);

        DB::table('song')->insert([
            'name_song'=> 'Túy Âm',
            'image_song' => 'Túy Âm.jpg',
            'image_bannersong' => 'Túy Âm_banner.jpg',
            'link_lyrics' => 'Túy Âm.lrc',
            'link_mp3' => 'Túy Âm.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '7',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-07',
            'updated_at'=>'2022-02-23'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Em gì ơi',
            'image_song' => 'Em gì ơi.jpg',
            'image_bannersong' => 'Em gì ơi_banner.jpg',
            'link_lyrics' => 'Em gì ơi.lrc',
            'link_mp3' => 'Em gì ơi.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '20',
            'top100_id' => '2',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-08',
            'updated_at'=>'2022-03-02'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Điều khác lạ',
            'image_song' => 'Điều khác lạ.jpg',
            'image_bannersong' => 'Điều khác lạ_banner.jpg',
            'link_lyrics' => 'Điều khác lạ.lrc',
            'link_mp3' => 'Điều khác lạ.mp3',
            'area_id' => '1',
            'category_id' => '3',
            'artist_id' => '7',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-09',
            'updated_at'=>'2022-02-28'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Em có nghe',
            'image_song' => 'Em có nghe.jpg',
            'image_bannersong' => 'Em có nghe_banner.jpg',
            'link_lyrics' => 'Em có nghe.lrc',
            'link_mp3' => 'Em có nghe.mp3',
            'area_id' => '1',
            'category_id' => '3',
            'artist_id' => '27',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-09',
            'updated_at'=>'2022-02-23'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Kém Duyên',
            'image_song' => 'Kém Duyên.jpg',
            'image_bannersong' => 'Kém Duyên_banner.jpg',
            'link_lyrics' => 'Kém Duyên.lrc',
            'link_mp3' => 'Kém Duyên.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '25',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-13',
            'updated_at'=>'2022-03-01'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Lần hẹn hò đầu tiên',
            'image_song' => 'Lần hẹn hò đầu tiên.jpg',
            'image_bannersong' => 'Lần hẹn hò đầu tiên_banner.jpg',
            'link_lyrics' => 'Lần hẹn hò đầu tiên.lrc',
            'link_mp3' => 'Lần hẹn hò đầu tiên.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '1',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-13',
            'updated_at'=>'2022-03-02'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Em cố đô Remix',
            'image_song' => 'Em cố đô Remix.jpg',
            'image_bannersong' => 'Em cố đô Remix_banner.jpg',
            'link_lyrics' => 'Em cố đô Remix.lrc',
            'link_mp3' => 'Em cố đô Remix.mp3',
            'area_id' => '3',
            'category_id' => '1',
            'artist_id' => '1',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-13',
            'updated_at'=>'2022-03-01'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Phố đã lên đèn Remix',
            'image_song' => 'Phố đã lên đèn Remix.jpg',
            'image_bannersong' => 'Phố đã lên đèn Remix_banner.jpg',
            'link_lyrics' => 'Phố đã lên đèn Remix.lrc',
            'link_mp3' => 'Phố đã lên đèn Remix.mp3',
            'area_id' => '3',
            'category_id' => '1',
            'artist_id' => '1',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-13',
            'updated_at'=>'2022-02-23'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Chuyện rằng',
            'image_song' => 'Chuyện rằng.jpg',
            'image_bannersong' => 'Chuyện rằng_banner.jpg',
            'link_lyrics' => 'Chuyện rằng.lrc',
            'link_mp3' => 'Chuyện rằng.mp3',
            'area_id' => '1',
            'category_id' => '3',
            'artist_id' => '1',
            'top100_id' => '9',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-13',
            'updated_at'=>'2022-03-01'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Thằng điên',
            'image_song' => 'Thằng điên.jpg',
            'image_bannersong' => 'Thằng điên_banner.jpg',
            'link_lyrics' => 'Thằng điên.lrc',
            'link_mp3' => 'Thằng điên.mp3',
            'area_id' => '1',
            'category_id' => '3',
            'artist_id' => '18',
            'top100_id' => '9',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-13',
            'updated_at'=>'2022-02-25'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Bài này chill phết',
            'image_song' => 'Bài này chill phết.jpg',
            'image_bannersong' => 'Bài này chill phết_banner.jpg',
            'link_lyrics' => 'Bài này chill phết.lrc',
            'link_mp3' => 'Bài này chill phết.mp3',
            'area_id' => '1',
            'category_id' => '3',
            'artist_id' => '6',
            'top100_id' => '9',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-13',
            'updated_at'=>'2022-02-23'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Đi về nhà',
            'image_song' => 'Đi về nhà.jpg',
            'image_bannersong' => 'Đi về nhà_banner.jpg',
            'link_lyrics' => 'Đi về nhà.lrc',
            'link_mp3' => 'Đi về nhà.mp3',
            'area_id' => '1',
            'category_id' => '3',
            'artist_id' => '18',
            'top100_id' => '9',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2021-11-13',
            'updated_at'=>'2022-02-23'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Có hẹn với thanh xuân',
            'image_song' => 'Có hẹn với thanh xuân.jpg',
            'image_bannersong' => 'Có hẹn với thanh xuân_banner.jpg',
            'link_lyrics' => 'Có hẹn với thanh xuân.lrc',
            'link_mp3' => 'Có hẹn với thanh xuân.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '24',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-20',
            'updated_at'=>'2022-02-27'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Hoa sứ nhà nàng',
            'image_song' => 'Hoa sứ nhà nàng.jpg',
            'image_bannersong' => 'Hoa sứ nhà nàng_banner.jpg',
            'link_lyrics' => 'Hoa sứ nhà nàng.lrc',
            'link_mp3' => 'Hoa sứ nhà nàng.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '1',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-23',
            'updated_at'=>'2022-02-27'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Tình đầu',
            'image_song' => 'Tình đầu.jpg',
            'image_bannersong' => 'Tình đầu_banner.jpg',
            'link_lyrics' => 'Tình đầu.lrc',
            'link_mp3' => 'Tình đầu.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '19',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-27',
            'updated_at'=>'2022-03-01'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Người chơi hệ đẹp',
            'image_song' => 'Người chơi hệ đẹp.jpg',
            'image_bannersong' => 'Người chơi hệ đẹp_banner.jpg',
            'link_lyrics' => 'Người chơi hệ đẹp.lrc',
            'link_mp3' => 'Người chơi hệ đẹp.mp3',
            'area_id' => '1',
            'category_id' => '3',
            'artist_id' => '1',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-02-20',
            'updated_at'=>'2022-03-02'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Ngày đầu tiên',
            'image_song' => 'Ngày đầu tiên.jpg',
            'image_bannersong' => 'Ngày đầu tiên_banner.jpg',
            'link_lyrics' => 'Ngày đầu tiên.lrc',
            'link_mp3' => 'Ngày đầu tiên.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '1',
            'top100_id' => '3',
            'view' => '1',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-03-04',
            'updated_at'=>'2022-03-03'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Nụ cười em là nắng',
            'image_song' => 'Nụ cười em là nắng.jpg',
            'image_bannersong' => 'Nụ cười em là nắng_banner.jpg',
            'link_lyrics' => 'Nụ cười em là nắng.lrc',
            'link_mp3' => 'Nụ cười em là nắng.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '1',
            'top100_id' => '3',
            'view' => '1',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-03-07',
            'updated_at'=>'2022-03-03'
        ]);

        DB::table('song')->insert([
            'name_song'=> 'Anh đã lạc vào',
            'image_song' => 'Anh đã lạc vào.jpg',
            'image_bannersong' => 'Anh đã lạc vào_banner.jpg',
            'link_lyrics' => 'Anh đã lạc vào.lrc',
            'link_mp3' => 'Anh đã lạc vào.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '1',
            'top100_id' => '3',
            'view' => '1',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-03-06',
            'updated_at'=>'2022-03-03'
        ]);

        DB::table('song')->insert([
            'name_song'=> 'Bước qua nhau',
            'image_song' => 'Bước qua nhau.jpg',
            'image_bannersong' => 'Bước qua nhau_banner.jpg',
            'link_lyrics' => 'Bước qua nhau.lrc',
            'link_mp3' => 'Bước qua nhau.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '28',
            'top100_id' => '3',
            'view' => '0',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-03-03',
            'updated_at'=>'2022-03-03'
        ]);
        DB::table('song')->insert([
            'name_song'=> 'Lung lay',
            'image_song' => 'Lung lay.jpg',
            'image_bannersong' => 'Lung lay_banner.jpg',
            'link_lyrics' => 'Lung lay.lrc',
            'link_mp3' => 'Lung lay.mp3',
            'area_id' => '1',
            'category_id' => '1',
            'artist_id' => '1',
            'top100_id' => '3',
            'view' => '1',
            'status' => '1',
            'prioty'=>'0',
            'created_at'=>'2022-05-07',
            'updated_at'=>'2022-05-03'
        ]);
    }
}
