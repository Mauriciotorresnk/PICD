<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabla_comida extends Model
{
    //
    protected $table='tabla_comida';
    protected $fillable[
      'Nombre','Domicilio','Nota'
    ];
}
