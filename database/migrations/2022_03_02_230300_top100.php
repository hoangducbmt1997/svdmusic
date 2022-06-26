<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Top100 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top100', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_top100',200)->unique();
            $table->string('image_top100',200);
            $table->string('image_gif_top100',200);
            $table->integer('area_id')->unsigned()->nullable();
            $table->string('link_top100',200)->default('#')->nullable();
            $table->tinyInteger('status')->default(1)->nullable();
            $table->integer('prioty')->default(0)->nullable();
            $table->timestamps();
            $table->foreign('area_id')->references('id')->on('area')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('top100');
    }
}
