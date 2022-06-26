<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mv', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_mv',200)->unique();
            $table->string('name_artist',200)->nullable();
            $table->string('image_mv',200);
            $table->string('link_mv',200)->default('#')->nullable();
            $table->integer('song_id')->unsigned()->nullable();
            $table->string('description_mv',200)->nullable();
            $table->string('slug_mv',200)->nullable();
            $table->tinyInteger('status')->default(1)->nullable();
            $table->integer('prioty')->default(0)->nullable();
            $table->timestamps();
            $table->foreign('song_id')->references('id')->on('song')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mv');
    }
}
