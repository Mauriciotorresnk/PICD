<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
  protected $primaryKey='Id';
  protected $table='tutor';
  protected $fillable=[
    'Nombre_tutor','Apellido_tutor','Encargado','Curp_tutor','Rfc_tutor','Antecedentes','Telefono',
  ];
}
