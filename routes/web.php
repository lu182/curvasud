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

Route::resource("usuarios","ClientesEmpleadosControlador");

Route::get("/saludar/{id}","PruebaController@saludar");

Route::post("/saludar","PruebaController@post");