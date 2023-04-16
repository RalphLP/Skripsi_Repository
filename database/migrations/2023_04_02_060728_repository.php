<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Repository extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repositorys', function (Blueprint $table) {
            $table->id();
            $table->string('judul_skripsi');
            $table->biginteger('id_user')->unsigned()->nullable();
           
            $table->longtext('abstrak');
            $table->string('pa1');
            $table->string('pa2');
            $table->string('sk');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repositorys');
    }
}
