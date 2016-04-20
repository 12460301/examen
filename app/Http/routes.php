<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

get('/', function () {
    return view('website.index');
});

/*get('/acceder', function () {

    return view('website.acceder');
    
  });*/

get('/registrar', function () {

    return view('website.registrar-usuario');
    
  });
get('/ent', function () {

    return view('administrador.registrar-mascotas');
    
  });



get('/usuarios', function(){


  $usuario = \DB::table('usuarios')->insert([
    'nombre' => 'Martin Gonzalez Muñiz',
    'email'  => '123@gmail.com',
    'password'=> \Hash::make('12345'),
    'created_at'=>date('Y-m-d H:i:s'),
    'updated_at'=>date('Y-m-d H:i:s')
  ]);

  return "Ok";

});

get('/acceder', 'LoginController@index');
post('/registrar-usuario', 'UsuarioController@store');
post('/login', 'LoginController@store');


//rutas del administrador
Route::group(['middleware' => 'admin'], function () {
  get('/administrador', 'AdministradorController@index');
  get('/logout', 'AdministradorController@logout');
  get('/registrar-mascotas','MascotaController@index');
  post('/registrarmascotas','MascotaController@store');
  get('/administrador/panel', 'AdministradorController@index');
});