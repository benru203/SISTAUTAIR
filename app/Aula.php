<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    //
    protected $table = 'aulas';

    protected$fillable = ['nombre','bloque_id'];

    public function bloque(){
      return $this->belongsTo('App\Bloque');
    }

    public function aire(){
      return $table->hasOne('App\Aire');
    }

    public function horarios(){
      return $this->belongsToMany('App\Horario');
    }
}
