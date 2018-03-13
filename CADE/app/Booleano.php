<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booleano extends Model
{
      protected $primaryKey='Id';
      protected $table='booleanos';
      protected $fillable=[
      'Jubilado','Servicio_medico','Bano_diario','Convivencia-animal'
      ];
}
