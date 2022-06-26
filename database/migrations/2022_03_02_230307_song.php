<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Song extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_song',200)->unique();
            $table->string('image_song',200)->nullable();
            $table->string('image_bannersong',200)->nullable();
            $table->string('description_song',200)->nullable();
            $table->string('link_lyrics',200)->nullable();
            $table->string('link_mp3',200);
            $table->string('slug_song',200)->nullable();
            $table->integer('area_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('artist_id')->unsigned()->nullable();
            $table->integer('top100_id')->unsigned()->nullable();
            $table->integer('playlist_id')->unsigned()->nullable();

            $table->integer('view')->nullable();
            $table->tinyInteger('status')->default(1)->nullable();
            $table->integer('prioty')->default(0)->nullable();
            $table->timestamps();
            $table->foreign('area_id')->references('id')->on('area')->onDelete('cascade');
            $table->foreign('artist_id')->references('id')->on('artist')->onDelete('cascade');
            $table->foreign('top100_id')->references('id')->on('top100')->onDelete('cascade');
            $table->foreign('playlist_id')->references('id')->on('playlist')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('song');
    }
}
