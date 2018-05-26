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



Route::get('nosotros', function () {
    return view('nosotros');
})->name("nosotros");

Route::get('modelos', function () {
    return view('modelos');
})->name("modelos");


Route::get('/misturnos',"TuneroController@verTurnos")->name("misturnos");

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

Route::get('/registro_clientes', 'usuariosController@registro_clientes_ver')->name('registro_clientes');

Route::post('/registro_clientes', 'usuariosController@registro_clientes_registrar')->name('registro_clientes');

Route::get('/turnero', 'TuneroController@index')->name('turnero');
Route::post('/turnero', 'TuneroController@registrar')->name('turnero');
Route::post('/guardarTurno', 'TuneroController@guardarTurno')->name('guardarTurno');

Route::post('/eliminarTurno', 'TuneroController@eliminar')->name('eliminarTurno');


Route::get('/registro_empleado', 'RegistroEmpleadoController@registroEmp_ver')->name('registro_empleado');
Route::post('/registro_empleado', 'RegistroEmpleadoController@registroEmp_registrar')->name('registro_empleado');

Route::post('/cambiar_tipo_servicio', 'TuneroController@cambiar_tipo_servicio')->name('cambiar_tipo_servicio');

Route::post('/cambiar_fecha', 'TuneroController@cambiar_fecha')->name('cambiar_fecha');
Route::post('/ver_fechas_disponibles', 'TuneroController@ver_fechas_disponibles')->name('ver_fechas_disponibles');


Route::post('/actualizarTurno', 'TuneroController@actualizarTurno')->name('actualizarTurno');