@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login</div>

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
                  <div class="row">
                    <h2>usuarios</h2>
                    <table class="table table-condensed">
                      <thead>
                        <tr>
                          <td>Id</td>
                          <td>Nombre</td>
                          <td>Apellido</td>
                          <td>Email</td>
                          <td>Editar</td>
                          <td>Eliminar</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          @forelse($perros as $usu)
                          <td>{{$usu->id}}</td>
                          <td>{{$usu->name}}</td>
                          <td></td>
                          <td></td>
                          <td>
                          {!! Form::open(
                            array('route'=>['admin.usuarios.destroy',$usu->id],
                          'method'=>'DELETE' )) !!}
                          <button type="submit" >
                            <i class="glyphicon glyphicon-trash"></i>
                          </button>
                          {!! Form::close() !!}
                          </td>
                          </tr>
                        @empty
                        <p>sin registro</p>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                  {{Form::open(array('url'=>'/admin/usuarios','files'=>true))}}
                    <div class="input=-group col-md-12">
                      <label for="nombre">Nombre</label><br>
                      {{Form::text('nombre','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Correo</label><br>
                      {{Form::email('correo','',array('class'=>'form-control','placeholder'=>'Correo') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Contraseña</label><br>
                      {{Form::password('p1',array('class'=>'form-control','placeholder'=>'Contraseña') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre"> Repetir Contraseña</label><br>
                      {{Form::password('p2',array('class'=>'form-control','placeholder'=>'Contraseña') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Imagen</label><br>
                      {{Form::file('Imagen',array('class'=>'form-control','placeholder'=>'Imagen') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="">Nivel</label><br>
                      {{Form::select('Nivel',
                      array('admin'=>'Administrador',
                        'normal','Normal'),
                      array('class'=>'form-control',
                      'placeholder'=>'imagen') )}}
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
