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

Route::get('/', "LandingController@index");



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



Route::get("/eac/bienvenida",'EacController@escritorioEac')->name('/eac/bienvenida');

Route::get("/eac/verTurnos","EacController@verTurnos")->name("/eac/verTurnos");

Route::get("/eac/turnosHoy", "EacController@TurnosHoy")->name("/eac/turnosHoy");

Route::get("/eac/clientesregistrados", "EacController@clientesRegistrados")->name("/eac/clientesregistrados");

Route::get("/eac/buscarPorChasis", "EacController@mostrar")->name("/eac/buscarPorChasis");
Route::post("/eac/buscarPorChasis", "EacController@buscarClientePorChasis")->name("/eac/buscarPorChasis");

Route::get("encargado/{pagina}", "EacController@mostrarPagina")->name("/encargado/");

Route::get("/eac/buscarPorModelo", "EacController@buscarModeloMostrar")->name("/eac/buscarPorModelo");
Route::post("/eac/buscarPorModelo", "EacController@buscarModeloRecibir")->name("/eac/buscarPorModelo");

Route::get("/eac/clientesPorVehiculo", "EacController@buscarClientePorVehiculo")->name("/eac/clientesPorVehiculo");


Route::get("/eac/turnosCancelados", "EacController@clientesTurnosCancelados")->name("/eac/turnosCancelados");


Route::get("/jefetaller/bienvenida", "JefeDeTallerController@bienvenida")->name("/jefetaller/bienvenida")->middleware('jefetaller');

Route::get("/jefetaller/ordenreparacion", "JefeDeTallerController@mostrarFormOrden")->name("/jefetaller/ordenreparacion");
Route::post("/jefetaller/ordenreparacion", "JefeDeTallerController@registrarOrden")->name("/jefetaller/ordenreparacion");
Route::get("pdf", "JefeDeTallerController@pdf")->name("pdf");

Route::get("jefetaller/{pagina}", "JefeDeTallerController@mostrarPagina")->name("/jefetaller/");
