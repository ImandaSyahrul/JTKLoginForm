<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jtkpolban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->string('username')->unique();
            $table->string('password');
            $table->string('nama');
            $table->string('email')->unique();
            $table->boolean('admin');
            $table->boolean('aktif');
            $table->timestamps('login-terakir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('post');
    }
}
