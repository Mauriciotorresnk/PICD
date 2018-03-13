<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    //
    protected $primaryKey='ID';
    protected $table='taller';
    protected $fillable[
    'Nombre','Curso','Edad','Observaciones'
    ];

}
