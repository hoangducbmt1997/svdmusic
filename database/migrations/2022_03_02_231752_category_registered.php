<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryRegistered extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_registered', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->tinyInteger('status')->default(1)->nullable();
            $table->integer('prioty')->default(0)->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->foreign('account_id')->references('id')->on('account')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_registered');
    }
}
