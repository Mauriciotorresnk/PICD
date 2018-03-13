<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Centro_Salud;

class Centro_Saludcontroller extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
      return view('centrosalud');
    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'edad'=>'required|max:255',
        'peso'=>'required|max:255',
        'Presion'=>'required|max:255',
      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('/admin/centrosalud')
          ->withInput()
          ->withErrors($validator);
      }else{
        Centro_salud::create([
          'edad'=>$req->Edad,
          'peso'=>$req->Peso,
          'presion'=>$req->Presion_arterial,
        ]);
        return redirect()->to('/admin/centrosalud')
        ->with('mensaje','datos agregados');
      }
      dd($req->nombre);
    }
}
