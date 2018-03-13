<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    //
    protected $table='evaluacion';
    protected $fillable[
      'tipo_examen','puntuacion'
    ];

}
