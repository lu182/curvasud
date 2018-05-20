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
    return view('home');
});


Route::get('/misturnos', function () {
    return view('cliente.misturnos');
})->name("misturnos");

Route::resource("usuarios","ClientesEmpleadosControlador");

Route::get("/saludar/{id}","PruebaController@saludar");

Route::post("/saludar","PruebaController@post");

Route::get('/escritorio', function () {
    return view('loggeduser');
})->name("escritorio");

Route::get('/misdatos', function () {
    return view('comunes.perfil');
})->name("misdatos");

Route::get('/mivehiculo', function () {
    return view('cliente.vehiculo');
})->name("mivehiculo");