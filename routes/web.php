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


Route::get('/', "LandingController@index")->name("principal");

Route::get('inicio', function () {
    return view('newHome.inicio');
})->name("inicio");

Route::get('/principal', "LandingController@index")->name("principal");



Route::get('nosotros', function () {
    return view('newHome.nosotros');
})->name("nosotros");

Route::get('contacto', function () {
    return view('newHome.contacto');
})->name("contacto");

Route::get('modelos', function () {
    return view('newHome.modelos');
})->name("modelos");

Route::get('services', function () {
    return view('newHome.services');
})->name("services");


Route::get('/misturnos',"TuneroController@verTurnos")->name("misturnos");
Route::get('/misordenes',"usuariosController@misOrdenes")->name("misordenes");




Route::resource("usuarios","ClientesEmpleadosControlador");



Route::get('/escritorio', "usuariosController@escritorio")->name("escritorio");


Route::get('/misdatos', "usuariosController@misdatos")->name("misdatos");
Route::post('/misdatos', "usuariosController@actualizarMisDatos")->name("misdatos");


Route::get('/mivehiculo', 'usuariosController@mivehiculo')->name("mivehiculo");
Route::post('/bajaVehiculo', 'usuariosController@bajaVehiculo')->name("bajaVehiculo");
Route::post('/altaVehiculo', 'usuariosController@altaVehiculo')->name("altaVehiculo");

Route::post('/agregarVehiculo', 'usuariosController@agregarVehiculo')->name("agregarVehiculo");


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




Route::get("/eac/mostrarOrdenPorChasis", "EacController@mostrarORporChasis")->name("/eac/mostrarOrdenPorChasis");
Route::post("/eac/mostrarOrdenPorChasis", "EacController@buscarORPorChasis")->name("/eac/mostrarOrdenPorChasis");




Route::get("encargado/{pagina}", "EacController@mostrarPagina")->name("/encargado/");

Route::get("/eac/buscarPorModelo", "EacController@buscarModeloMostrar")->name("/eac/buscarPorModelo");
Route::post("/eac/buscarPorModelo", "EacController@buscarModeloRecibir")->name("/eac/buscarPorModelo");

Route::get("/eac/clientesPorVehiculo", "EacController@buscarClientePorVehiculo")->name("/eac/clientesPorVehiculo");


Route::get("/eac/turnosCancelados", "EacController@clientesTurnosCancelados")->name("/eac/turnosCancelados");

Route::get("/eac/consultarordenCliente", "EacController@consultarordenClienteVer")->name("/eac/consultarordenCliente");
Route::post("/eac/consultarordenCliente", "EacController@consultarordenClienteBuscar")->name("/eac/consultarordenCliente");
Route::get("/eac/verOrden/{id}", "EacController@mostrarOrden")->name("/eac/verOrden");


Route::get("/eac/reporteclientes", "EacController@reporteClientes")->name("eac/reporteclientes");
Route::get("/eac/reportecancelados", "EacController@reporteCancelados")->name("eac/reportecancelados");


Route::get("/jefetaller/bienvenida", "JefeDeTallerController@bienvenida")->name("/jefetaller/bienvenida")->middleware('jefetaller');

Route::get("/jefetaller/ordenreparacion", "JefeDeTallerController@mostrarFormOrden")->name("/jefetaller/ordenreparacion");
Route::post("/jefetaller/ordenreparacion", "JefeDeTallerController@registrarOrden")->name("/jefetaller/ordenreparacion");
Route::get("pdf", "JefeDeTallerController@pdf")->name("pdf");

Route::get("/jefetaller/registrarmecanico", "JefeDeTallerController@mostrarFormMecanico")->name("/jefetaller/registrarmecanico");
Route::post("/jefetaller/registrarmecanico", "JefeDeTallerController@registrarMecanico")->name("/jefetaller/registrarmecanico");

Route::get("/jefetaller/mecanicosRegistrados", "JefeDeTallerController@mecanicosRegistrados")->name("/jefetaller/mecanicosRegistrados");

Route::get("/jefetaller/turnosDispYnoDisp", "JefeDeTallerController@verTurnos")->name("/jefetaller/turnosDispYnoDisp");

Route::get("/jefetaller/turnosCanceladosDelDia", "JefeDeTallerController@TurnosHoy")->name("/jefetaller/turnosCanceladosDelDia");

Route::get("/jefetaller/serviciosRegistrados", "JefeDeTallerController@serviciosRegistrados")->name("/jefetaller/serviciosRegistrados");


Route::get("/jefetaller/buscarPorChasis", "JefeDeTallerController@mostrar")->name("/jefetaller/buscarPorChasis");
Route::post("/jefetaller/buscarPorChasis", "JefeDeTallerController@buscarClientePorChasis")->name("/jefetaller/buscarPorChasis");

Route::get("/jefetaller/vehiculossRegistrados", "JefeDeTallerController@vehiculosRegistrados")->name("/jefetaller/vehiculossRegistrados");

Route::get("/jefetaller/buscarVehiculosPorModelo", "JefeDeTallerController@buscarModeloMostrar")->name("/jefetaller/buscarVehiculosPorModelo");
Route::post("/jefetaller/buscarVehiculosPorModelo", "JefeDeTallerController@buscarModeloRecibir")->name("/jefetaller/buscarVehiculosPorModelo");


Route::get("/jefetaller/consultarordenCliente", "JefeDeTallerController@consultarordenClienteVer")->name("/jefetaller/consultarordenCliente");
Route::post("/jefetaller/consultarordenCliente", "JefeDeTallerController@consultarordenClienteBuscar")->name("/jefetaller/consultarordenCliente");
Route::get("/jefetaller/verOrden/{id}", "JefeDeTallerController@mostrarOrden")->name("/jefetaller/verOrden");


Route::get("/jefetaller/mostrarOrdenPorChasis", "JefeDeTallerController@mostrarORporChasis")->name("/jefetaller/mostrarOrdenPorChasis");
Route::post("/jefetaller/mostrarOrdenPorChasis", "JefeDeTallerController@buscarORPorChasis")->name("/jefetaller/mostrarOrdenPorChasis");

Route::get("/jefetaller/turnosDiaPorModelo", "JefeDeTallerController@turnosDiaPorModelo")->name("/jefetaller/turnosDiaPorModelo");
Route::get("/jefetaller/turnosPorTipoServicio", "JefeDeTallerController@turnosPorTipoServicio")->name("/jefetaller/turnosPorTipoServicio");
Route::get("/jefetaller/generarPdfTurnosPorTipoServicio", "JefeDeTallerController@generarPdfTurnosPorTipoServicio")->name("/jefetaller/generarPdfTurnosPorTipoServicio");

Route::get("/jefetaller/turnosportipovehiculo", "JefeDeTallerController@turnosPorModeloHoy")->name("/jefetaller/turnosportipovehiculo");
Route::get("/jefetaller/generarPdfTurnosDiaModelo", "JefeDeTallerController@generarPdfTurnosDiaModelo")->name("/jefetaller/generarPdfTurnosDiaModelo");

Route::get("/jefetaller/turnosFinalDia", "JefeDeTallerController@turnosFinalDia")->name("/jefetaller/turnosFinalDia");
Route::get("/jefetaller/generarPdfturnosFinalDia", "JefeDeTallerController@generarPdfturnosFinalDia")->name("/jefetaller/generarPdfturnosFinalDia");

Route::get("/jefetaller/trabajosPorMecanicoMostrar", "JefeDeTallerController@trabajosPorMecanicoMostrar")->name("/jefetaller/trabajosPorMecanicoMostrar");
Route::post("/jefetaller/trabajosPorMecanicoMostrar", "JefeDeTallerController@trabajosPorMecanicoGenerar")->name("/jefetaller/trabajosPorMecanicoMostrar");



Route::get("/jefetaller/totalOrdenes", "JefeDeTallerController@totalOrdenes")->name("/jefetaller/totalOrdenes");
Route::get("/jefetaller/generarPDFtotalOrdenes", "JefeDeTallerController@generarPDFtotalOrdenes")->name("/jefetaller/generarPDFtotalOrdenes");


Route::get("/jefetaller/ordenesPorEstado", "JefeDeTallerController@ordenesPorEstado")->name("/jefetaller/ordenesPorEstado");
Route::get("/jefetaller/generarPDFordenesPorEstado", "JefeDeTallerController@generarPDFordenesPorEstado")->name("/jefetaller/generarPDFordenesPorEstado");


Route::get("/jefetaller/vehiculosPorTipoServicio", "JefeDeTallerController@vehiculosPorTipoServicio")->name("/jefetaller/vehiculosPorTipoServicio");
Route::get("/jefetaller/generarPDFvehiculosPorTipoServicio", "JefeDeTallerController@generarPDFvehiculosPorTipoServicio")->name("/jefetaller/generarPDFvehiculosPorTipoServicio");

Route::get("/jefetaller/verOrdenes", "JefeDeTallerController@verOrdenes")->name("/jefetaller/verOrdenes");
Route::post('/jefetaller/verOrdenes',"JefeDeTallerController@actualizarOrdenMostrar")->name("jefetaller/misordenes");
Route::post('/actualizarOrden',"JefeDeTallerController@actualizarOrdenGuardar")->name("jefetaller/actualizarOrden");


Route::get("/jefetaller/VehiculosMes", "JefeDeTallerController@VehiculosMes")->name("/jefetaller/VehiculosMes");
Route::get("/jefetaller/generarPDFVehiculosMes", "JefeDeTallerController@generarPDFVehiculosMes")->name("/jefetaller/generarPDFVehiculosMes");

Route::get("/jefetaller/vehiculosPeriodo", "JefeDeTallerController@vehiculoPeriodoMostrar")->name("jefetaller/vehiculosPeriodo");
Route::post("/jefetaller/vehiculosPeriodo", "JefeDeTallerController@vehiculoPeriodoResultado")->name("jefetaller/vehiculosPeriodo");
Route::post("/jefetaller/periodoPDF", "JefeDeTallerController@periodoPDF")->name("jefetaller/periodoPDF");



Route::get('/logout', 'Auth\LoginController@logout')->name("logout");


Route::get("jefetaller/{pagina}", "JefeDeTallerController@mostrarPagina")->name("/jefetaller/");

Route::post("mail", "EnvioEmailController@enviarMail")->name("mail");
Route::post("suscripcion", "EnvioEmailController@suscripcion")->name("suscripcion");

Route::get("sin_permiso", function () {
    return "NO TIENES PERMISO PARA ACCEDER";
})->name("sin_permiso");


Route::get("admin/{pagina}", "AdministradorController@mostrarPagina")->name("admin");
Route::get("admin/abm/{objeto}", "AdministradorController@mostrarAbm")->name("admin/abm");

Route::get("/administrador/bienvenida",'AdministradorController@escritorioAdmin')->name('/administrador/bienvenida');

Route::get("/administrador/crearCliente",'AdministradorController@crearCliente')->name('/administrador/crearCliente');
Route::post("/administrador/crearCliente",'AdministradorController@crearCliente')->name('/administrador/crearCliente');