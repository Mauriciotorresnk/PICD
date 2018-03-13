<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro_salud extends Model
{

  protected $table='archivos';
  protected $fillable=[
    'Edad','Peso','Presion_arterial'
  ];
}
