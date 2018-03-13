<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitas extends Model
{
    //
    protected $table='visitas';
    protected $fillable[
      'Tipo_de_visita','Nota'
    ];
}
