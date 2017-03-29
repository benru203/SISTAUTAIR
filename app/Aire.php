<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aire extends Model
{
    //
    protected $table('aires');

    protected $ fillable['descripcion','estado','aula_id'];

    public function aire(){
      return $this->hasOne('App\aula');
    }
}
