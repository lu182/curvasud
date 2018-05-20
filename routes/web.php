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
    return view('prueba');
});


Route::get('/misturnos', function () {
    return view('cliente.misturnos');
})->name("misturnos");

Route::resource("usuarios","ClientesEmpleadosControlador");



Route::get('/escritorio', "usuariosController@escritorio")->name("escritorio");
Route::get('/misdatos', "usuariosController@misdatos")->name("misdatos");



Route::get('/mivehiculo', 'usuariosController@mivehiculo')->name("mivehiculo");


Auth::routes();


Route::get('login', [
    'as' => 'login',
    'uses' => 'ClientesEmpleadosControlador@index'
  ]);

  
Route::get('/home', 'usuariosController@escritorio')->name('home');
