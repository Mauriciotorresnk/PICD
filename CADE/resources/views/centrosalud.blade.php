@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Datos Del Centro de Salud</div>

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
                  {{Form::open(array('url'=>'/admin/Centrosalud','files'=>true))}}
                    <div class="input=-group col-md-12">
                      <label for="nombre">Edad</label><br>
                      {{Form::text('edad','',array('class'=>'form-control','placeholder'=>'Edad') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Peso</label><br>
                      {{Form::text('peso','',array('class'=>'form-control','placeholder'=>'Peso') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Presion Arterial</label><br>
                      {{Form::text('presion','',array('class'=>'form-control','placeholder'=>'Presion') )}}
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
