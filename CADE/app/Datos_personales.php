<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datos_personales extends Model
{
  protected $primaryKey='Id';
  protected $table='Datos_personales';
  protected $fillable=[
  'Nombre','Apellido_p','Apellido_m','Fecha_nacimiento','Lugar_nacimiento','Edad',
  'Sexo','Edo_civil','Tipo_sangre','Estatura','Talla','Calzado','Domicilio','Cp','Localida','Tel'
  ];
}
