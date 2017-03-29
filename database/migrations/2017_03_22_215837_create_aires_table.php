<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAiresTable extends Migration
{
  /**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    //
    Schema::create('aires',function(Blueprint $table){
      $table->increments('id');
      $table->string('descripcion');
      $table->binary('estado');
      $table->integer('aula_id')->unsigned();
      $table->timestamps();
      $table->foreign('aula_id')->references('id')->on('aulas')->onDelete('cascade');

    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::drop('aires');
}
}
