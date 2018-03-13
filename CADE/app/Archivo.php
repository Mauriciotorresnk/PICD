<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
  protected $primaryKey='Id';
  protected $table='archivos';
  protected $fillable=[
    'Foto_infantil','Foto_cuerpo','Certificado_discapacida','Copia_curp','Curp'
  ];
}
