<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
 {
     Schema::create('horarios',function(Blueprint $table){
       $table->increments('id');
       $table->string('dia');
       $table->time('inicio');
       $table->time('fin');
       $table->timestamps();
     });
     Schema::create('aula_horarios',function(Blueprint $table){
       $table->increments('id');
       $table->integer('aula_id')->unsigned();
       $table->integer('horario_id')->unsigned();
       $table->timestamps();
       $table->foreign('aula_id')->references('id')->on('aulas')->onDelete('cascade');
       $table->foreign('horario_id')->references('id')->on('horarios')->onDelete('cascade');
     });
 }

 /**
  * Reverse the migrations.
  *
  * @return void
  */
 public function down()
 {
     //
     Schema::drop('aula_horarios');
     Schema::drop('horarios');
 }

}
