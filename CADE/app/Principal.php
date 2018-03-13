<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Principal extends Model
{
    //
    protected $primaryKey='Id';
    protected $table='Principal';
    protected $fillable=[
      'Foto_infantil','Foto_cuerpo','Certificado_discapacidad','Copia_curp','Comprobante_domicilio','Fecha','Nombre',
      'Apellido_p','Apellido_m','Fecha_nacimiento','Curp','Lugar_nacimiento','Edad','Sexo','Edo-civil','Discapacidad','Causa_de_discapacidad',
      'Tipo_de_sangre','peso','Estatura','Talla','Calzado','Rehabilitacion','lugar_de_rehab','Tipo_rehabilitacion','Apoyo_funcional',
      'requeiere_apoyo_funcional','Domicilio','Colonia','Municipio','Cp','Localidad','Tel.1','Tel.2','Jubilado_pencionado','Servicio_medico',
      'Nombre_tutor', 'Apellido_tutor','Encargado','Curp_tutor','RFC_tutor','Antecedentes','Bano_diario','Convivencia_con_animales'
    ];
}
