<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aulas',function(Blueprint $table){
          $table->increments('id');
          $table->string('nombre')->unique();
          $table->integer('bloque_id')->unsigned();
          $table->timestamps();
          $table->foreign('bloque_id')->references('id')->on('bloques')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aulas');
    }
}
