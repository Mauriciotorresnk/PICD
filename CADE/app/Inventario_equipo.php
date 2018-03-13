<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario_equipo extends Model
{
    //
    protected $primaryKey='id_equipo';
    protected $table='inventario_equipo';
    protected $fillable[
      'Nombre','Cantidad','Entragado_a'
    ];
}
