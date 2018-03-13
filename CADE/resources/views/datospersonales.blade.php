@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Datos Personales</div>

                <div class="card-body">
                  @if($errors->any())
                    <div class="alert alert-warning alert-dismissable">
                      <ul>

                      @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                      </ul>
                    </div>
                  @endif
                  @if(session()->has('mensaje'))
                    <div class="alert alert-success">
                      {{session()->get('mensaje')}}
                    </div>
                  @endif
                  {{Form::open(array('url'=>'/admin/datospersonales','files'=>true))}}
                    <div class="input=-group col-md-12">
                      <label for="nombre">Nombre</label><br>
                      {{Form::text('nombre','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Apellido Paterno</label><br>
                      {{Form::text('ap_p','',array('class'=>'form-control','placeholder'=>'Apellido paterno') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Apellido materno</label><br>
                      {{Form::text('ap_m','',array('class'=>'form-control','placeholder'=>'Apellido materno') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Fecha nacimiento </label><br>
                      {{Form::text('fecha_na','',array('class'=>'form-control','placeholder'=>'Fecha nacimiento') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Lugar nacimiento </label><br>
                      {{Form::text('lugar_na','',array('class'=>'form-control','placeholder'=>'Lugar nacimiento') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Edad </label><br>
                      {{Form::text('edad','',array('class'=>'form-control','placeholder'=>'Edad') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Sexo </label><br>
                      {{Form::text('sexo','',array('class'=>'form-control','placeholder'=>'Sexo') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Estado civil </label><br>
                      {{Form::text('edo_civil','',array('class'=>'form-control','placeholder'=>'Estado civil') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Tipo sanguineo </label><br>
                      {{Form::text('tipo_sangre','',array('class'=>'form-control','placeholder'=>'Tipo sangre') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Estatura </label><br>
                      {{Form::text('estatura','',array('class'=>'form-control','placeholder'=>'Estatura') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Talla </label><br>
                      {{Form::text('talla','',array('class'=>'form-control','placeholder'=>'Talla') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Calzado </label><br>
                      {{Form::text('clzado','',array('class'=>'form-control','placeholder'=>'Calzado') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Domicilio </label><br>
                      {{Form::text('domicilio','',array('class'=>'form-control','placeholder'=>'Domicilio') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Codigo Postal </label><br>
                      {{Form::text('cp','',array('class'=>'form-control','placeholder'=>'Cp') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Localidad </label><br>
                      {{Form::text('localidad','',array('class'=>'form-control','placeholder'=>'Localidad') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Telefono </label><br>
                      {{Form::text('tel','',array('class'=>'form-control','placeholder'=>'Telefono') )}}
                    </div>
                    <div class="input-group col-md-12">
                      {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
                    </div>
                  {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
