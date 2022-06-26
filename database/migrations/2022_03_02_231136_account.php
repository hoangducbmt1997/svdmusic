<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Account extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->increments('id');
            $table->string('birthday',200)->nullable();
            $table->string('name',200);
            $table->string('email',200)->unique();
            $table->string('phone',200)->unique()->nullable();
            $table->string('remember_token',200)->nullable();
            $table->string('password',200);
            $table->string('gender',50)->nullable();
            $table->string('description',255)->nullable();
            $table->integer('role')->nullable();
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
        Schema::dropIfExists('account');
    }
}
