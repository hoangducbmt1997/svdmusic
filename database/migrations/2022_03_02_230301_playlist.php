<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Playlist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlist', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_playlist',200)->unique();
            $table->string('image_playlist',200);
            $table->string('description_playlist',200)->nullable();
            $table->string('slug_playlist',200)->nullable();
            $table->tinyInteger('status')->default(1)->nullable();
            $table->integer('prioty')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playlist');
    }
}
