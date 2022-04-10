<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('db_siswa', function (Blueprint $table){
           $table->increments('ids');
           $table->string('users',255);
           $table->string('username',255);
           $table->string('access',255);
           $table->string('password',60);
           $table->timestamps();
         });
/*
         Schema::create('db_buku', function (Blueprint $table){
           $table->increments('idb');
           $table->string('namabk',255);
           $table->string('cath',255);
           $table->string('auth',255);
           $table->string('tahun',255);
           $table->string('score',255);
           $table->timestamps();
         });

         Schema::create('db_pinjam', function (Blueprint $table){
           $table->increments('idp');
           $table->integer('ids');
           $table->integer('idb');
           $table->date('pinjam');
           $table->date('kembali');
           $table->text('ketr',255);
           $table->timestamps();
         });
    */
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
         Schema::drop('db_siswa');
     }
}
