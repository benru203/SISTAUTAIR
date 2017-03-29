<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    //
    protected $table('horarios');

    protected $fillable['dia','inicio','fin'];

    public function aulas(){
      return $this->belongsToMany('App\Aula')->withTimestamps();
    }
}
