<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Datos_personales;

class datospersonalescontroller extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
      return view('datospersonales');
    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'nombre'=>'required|max:255',
        'ap_p'=>'required|max:255',
        'ap_m'=>'required|max:255',
        'fecha_na'=>'required|max:255',
        'lugar_na'=>'required|max:255',
        'edad'=>'required|max:255',
        'sexo'=>'required|max:255',
        'edo_civil'=>'required|max:255',
        'tipo_sangre'=>'required|max:255',
        'estatura'=>'required|max:255',
        'talla'=>'required|max:255',
        'calzado'=>'required|max:255',
        'domicilio'=>'required|max:255',
        'cp'=>'required|max:255',
        'localidad'=>'required|max:255',
        'tel'=>'required|max:255',
      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('/admin/datospersonales')
          ->withInput()
          ->withErrors($validator);
      }else{
        Datos_personales::create([
          'nombre'=>$req->Nombre,
          'ap_p'=>$req->Apellido_p,
          'ap_m'=>$req->Apellido_m,
          'fecha_na'=>$req->Fecha_nacimiento,
          'lugar_na'=>$req->Lugar_nacimiento,
          'edad'=>$req->Edad,
          'sexo'=>$req->Sexo,
          'edo_civil'=>$req->Edo_civil,
          'tipo_sangre'=>$req->Tipo_sangre,
          'estatura'=>$req->Estatura,
          'talla'=>$req->Talla,
          'calzado'=>$req->Calzado,
          'domicilio'=>$req->Domicilio,
          'cp'=>$req->Cp,
          'localidad'=>$req->Localidad,
          'tel'=>$req->Tel

        ]);
        return redirect()->to('/admin/datospersonales')
        ->with('mensaje','datos agregados');
      }
      dd($req->nombre);
    }
}
