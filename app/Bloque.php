<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloque extends Model
{
    //
    protected $table('bloques');

    protected $fillable['num_aulas','nombre'];

    public function aulas(){
      return $this->hasMany('App\Aula');
    }

}
