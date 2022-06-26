<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Album extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ablum',200);
            $table->string('image_ablum',200);
            $table->integer('artist_id')->unsigned()->nullable();
            $table->tinyInteger('status')->default(1)->nullable();
            $table->integer('prioty')->default(0)->nullable();
            $table->timestamps();
            $table->foreign('artist_id')->references('id')->on('artist')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album');
    }
}
