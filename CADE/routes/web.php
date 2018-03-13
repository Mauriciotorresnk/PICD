<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/principal', function () {
    return view('paginaprincipal');
});

Route::get('/Login',function(){
    return view('login');
Route::get('/usuarios',function(){
    return view('usuarios');
});
});
Route::get('/dashboard',function(){
  return view ('dashboard');
});
Route::group(['prefix'=>'admin', 'as'=>'admin.'],function(){
  Route::get('/',function(){return "yeah";});
  Route::get('/usuarios','usuarioscontroller@index')->name('usuarios');
  Route::get('/archivos','archivoscontroller@index')->name('archivos');
  Route::get('/centrosalud','Centro_saludcontroller@index')->name('centrosalud');
  Route::get('/datospersonales','datospersonalescontroller@index')->name('datospersonales');
  Route::resource('usuarios','usuarioscontroller');
  Route::resource('archivos','archivoscontroller');
  Route::resource('centrosalud','Centro_Saludcontroller');
  Route::resource('datospersonales','datospersonalescontroller');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
