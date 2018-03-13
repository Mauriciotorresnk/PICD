<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario_medicamento extends Model
{
    //
    protected $primaryKey='Id_medicamento';
    protected $table='inventario_medicamento';
    protected $fillable[
      'Nombre','Cantidad','Caducidad','Dosis','Entregado_a'
    ];
}
