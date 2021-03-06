<?php

namespace App\Http\Controllers;

use App\Ciudad;
use App\DetalleOrden;
use App\Mecanico;
use App\OrdenReparacion;
use App\TipoDocumento;
use App\TipoServicio;
use App\TipoVehiculo;
use App\EstadoOrden;
use App\Turno;
use App\User;
use App\Vehiculo;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use PDF;

class JefeDeTallerController extends Controller
{

    public function __construct()
    {
        $this->middleware('jefetaller', ['except' => ['mostrarOrden']]);
    }

    public function bienvenida()
    {

        $fecha_actual = Carbon::now('America/Argentina/Buenos_Aires');
        $año = $fecha_actual->year;
        $mes = $fecha_actual->month;
        if ($mes < 10) {
            $mes = "0" . $mes;
        }
        $dia = $fecha_actual->day;
        $fecha_a_buscar = $año . "-" . $mes . "-" . $dia;

        $turnosHoy = Turno::where("id_estado_turno", "2")
                ->where("fecha", '=', $fecha_a_buscar)
                ->get();

                    //Turnos por tipo de servicio


        $tipos = TipoServicio::with("tiposervicio_turno")->get();
        $total_turnos_tipo = [];
        $nombres_tipos = [];
        $colores_tipos = [];
        $cantidad = 0;

        array_push($colores_tipos, sprintf('#%06X', mt_rand(0, 0xFFFFFF)));

        foreach ($tipos as $tipo){
            if ($tipo->tiposervicio_turno->count() > 1){
                array_push($nombres_tipos,$tipo->tipoServicio);
                array_push($colores_tipos, sprintf('#%06X', mt_rand(0, 0xFFFFFF)));
                foreach($tipo->tiposervicio_turno as $turno){
                    if ($turno->fecha >= $fecha_a_buscar){
                        $cantidad = $cantidad + 1;
                    }
                }
                    array_push($total_turnos_tipo,$cantidad);
                    $cantidad = 0;

                }
            }

            $graficoTurnosTipoServicio = app()->chartjs
            ->name('graficoTurnosTipoServicio')
            ->type('pie')
            ->size(['width' => 400, 'height' => 200])
            ->labels($nombres_tipos)
            ->datasets([
                [
                    'backgroundColor' => $colores_tipos,
                    'hoverBackgroundColor' => $colores_tipos,
                    'data' => $total_turnos_tipo,
                ],
            ])
            ->options([]);


            //Grafico de vehiculos ingresados por mes

            $nombres_meses = [];
            $cantidad_vehiculos = [];
            $colores_vehiculos = [];
            $hoy = Carbon::now('America/Argentina/Buenos_Aires');
            $vehiculosMesIds = [];
            $mesActual = $hoy->month;
            setlocale(LC_TIME, 'Spanish');
            $meses = [1,2,4,5,6,7,8,9,10,11,12];

            foreach ($meses as $mes){

                $turnosMes = Turno::with("vehiculo")->whereMonth("fecha","=",$mes)->get();

                if($turnosMes->count() > 0 ){
                    $vehiculosMesIds = [];

                    foreach($turnosMes as $turno) {

                        array_push($vehiculosMesIds,$turno->id_vehiculo);
                        
                    }

                    $vehiculosUnicos = array_unique($vehiculosMesIds);

                    //ACA TENEMOS AL MENOS UN TURNO REGISTRADO EN EL MES
                   array_push($cantidad_vehiculos, count($vehiculosUnicos));

                    array_push($colores_vehiculos, sprintf('#%06X', mt_rand(0, 0xFFFFFF)));
                    $query1 = Carbon::now('America/Argentina/Buenos_Aires')->month($mes);
                    setlocale(LC_TIME, 'Spanish');
                    $nombre_mes = $query1->formatLocalized(' %B');
                    array_push($nombres_meses,$nombre_mes);
                
                }
            }

        

            
array_push($cantidad_vehiculos,0);

            $vehiculosMes = app()->chartjs
            ->name('vehiculosMes')
            ->type('bar')
            ->size(['width' => 400, 'height' => 200])
            ->labels($nombres_meses)
            ->datasets([
                [
                    'label'=>"Vehiculo por mes",
                    'backgroundColor' => $colores_vehiculos,
                    'hoverBackgroundColor' => $colores_vehiculos,
                    'data' => $cantidad_vehiculos,
                ],
            ])
            ->options([]);

            $ordenesEnProceso= OrdenReparacion::where("id_estado_orden",2)->count();


        return view("jefetaller.bienvenida",["turnosHoy"=>$turnosHoy,"ordenesEnProceso"=>$ordenesEnProceso,
         "graficoTurnosTipoServicio"=>$graficoTurnosTipoServicio, "vehiculosMes"=>$vehiculosMes]);

    }

    public function mostrarFormOrden()
    {

        $clientes = User::where("tipo_user_id", 1)->get();
        $vehiculos = Vehiculo::get();
        $tipos_servicio = TipoServicio::get();
        $mecanicos = Mecanico::get();

        return view('jefetaller.ordenreparacion', ["mecanicos" => $mecanicos, "clientes" => $clientes, "vehiculos" => $vehiculos, "tipos_servicio" => $tipos_servicio]);

    }

    public function registrarOrden(Request $request)
    {

        if (!isset($request->vehiculo)) {

            return redirect()->back()->withErrors(['Debe seleccionar un cliente y un vehículo']);
        }
        $mecanico = Mecanico::find($request->id_mecanico);
        $fecha_ingreso = date('Y-m-d', time());
        $fecha_estimada_egreso = $request->fecha_estimada_egreso;

        $generada_por = Auth::user()->nombre;
        $cliente = User::find($request->cliente);
        $vehiculo = Vehiculo::find($request->vehiculo);

        $motivo_ingreso = $request->motivo_ingreso;
        $operacion_realizada = $request->operacion_realizada;
        $observaciones = $request->observaciones;
        $extra = $request->extra;
        $km = $request->km;

        $orden_reparacion = OrdenReparacion::create([
            "id_estado_orden" => 2, //en proceso
            "fecha_ingreso_vehiculo" => $fecha_ingreso,
            "fecha_egreso_vehiculo" => $fecha_estimada_egreso,
            "id_mecanico" => $mecanico->id_mecanico,
            "id_vehiculo" => $vehiculo->id_vehiculo,
            "id_cliente" => $request->cliente,

        ]);

        $detalle_orden = DetalleOrden::create([
            "id_orden_reparacion" => $orden_reparacion->id_orden_reparacion,
            "kilometraje" => $km,
            "motivo_ingreso" => $motivo_ingreso,
            "observaciones" => $observaciones,
            "extra" => $extra,
            "mecanico" => $mecanico->id_mecanico,
            "operacion_realizada" => $operacion_realizada,
        ]);

        $orden = PDF::loadView('jefetaller.pdf.ordenreparacion',

            ["orden" => $orden_reparacion, "detalle_orden" => $detalle_orden,
            ]
        );
        return $orden->download('Orden Reparación ' . $cliente->nombre . ' ' . $cliente->apellido . '.pdf');
        return redirect()->route("home");

    }

    //Registrar mecánicos
    public function mostrarFormMecanico()
    {

        $ciudades = Ciudad::get();
        $tipos_documento = TipoDocumento::get();
        return view("jefetaller.registrarmecanico", ["tipos_documento" => $tipos_documento, "ciudades" => $ciudades]);

    }

    public function registrarMecanico(Request $request)
    {

        $mecanicoNuevo = Mecanico::create($request->all());

        if (!is_null($request->inputOtro)) {
            $ciudadNueva = Ciudad::create(["ciudad" => $request->inputOtro]);
            $mecanicoNuevo->update(["id_ciudad" => $ciudadNueva->id_ciudad]);

        }
        return Redirect::back()->withErrors(['Mecánico registrado correctamente']);
        // view("jefetaller.bienvenida")->withErrors(['Mecánico Registrado Correctamente']);

    }

    //Funciones para devolver página de consultas y reportes
    public function mostrarPagina($pagina)
    {

        if ($pagina == "consultas") {
            return view("jefetaller.consultas");
        }
        return view("jefetaller.reportes");
    }

    //Consultar turnos disponibles y no disponibles
    public function verTurnos()
    {
        $fechas_finales = array();
        $start = Carbon::now();
        $end = Carbon::createFromFormat('Y-m-d', substr(Carbon::now()->addDays(90), 0, 10));

        $fechas = [];

        while ($start->lte($end)) {

            $fechas[] = $start->copy()->format('Y-m-d');

            $diaAgregar = $start->addDay();
        }

        foreach ($fechas as $fecha) {

            $turnos_fecha = Turno::where("fecha", $fecha)->where("id_estado_turno", 2)->get();

            //Creamos un array de Fechas (Esto podría ser base de datos)
            $horas = array(
                ["hora" => "08:00:00", "estado" => 1],
                ["hora" => "09:00:00", "estado" => 1],
                ["hora" => "10:00:00", "estado" => 1],
                ["hora" => "11:00:00", "estado" => 1],
                ["hora" => "12:00:00", "estado" => 1],
                ["hora" => "13:00:00", "estado" => 1],
                ["hora" => "14:00:00", "estado" => 1],
                ["hora" => "15:00:00", "estado" => 1],
                ["hora" => "16:00:00", "estado" => 1],
                ["hora" => "17:00:00", "estado" => 1],
                ["hora" => "18:00:00", "estado" => 1],
            );
            $fechas_finales[$fecha] = ['fecha' => $fecha, "horas" => $horas];

            //Hacemos la comparación del Array con los turnos cargados en Database,
            // y agregamos los ya tomados, junto con sus 3 horas siguientes y 2 anteriores
            foreach ($turnos_fecha as $turno) {

                //clave es = a index o indice

                $clave = array_search($turno->hora, array_column($fechas_finales[$fecha]['horas'], "hora"));

                if ($clave == 0) {

                    $fechas_finales[$fecha]['horas'][0] = ["hora" => $fechas_finales[$fecha]['horas'][0]["hora"], "estado" => 0];
                    $fechas_finales[$fecha]['horas'][1] = ["hora" => $fechas_finales[$fecha]['horas'][1]["hora"], "estado" => 0];
                    $fechas_finales[$fecha]['horas'][2] = ["hora" => $fechas_finales[$fecha]['horas'][2]["hora"], "estado" => 0];
                }

                if ($clave) {
                    //Si la clave existe, significa que encontró un turno que se corresponde a algun horario.
                    // A través de la clave, comparamos el horario del turno con el array de horas para cambiar su estado
                    $fechas_finales[$fecha]['horas'][$clave] = ["hora" => $fechas_finales[$fecha]['horas'][$clave]["hora"], "estado" => 0];

                    if (array_key_exists($clave + 1, $fechas_finales[$fecha]['horas'])) {
                        $fechas_finales[$fecha]['horas'][$clave + 1] = ["hora" => $fechas_finales[$fecha]['horas'][$clave + 1]["hora"], "estado" => 0];
                    }

                    if (array_key_exists($clave + 2, $fechas_finales[$fecha]['horas'])) {
                        $fechas_finales[$fecha]['horas'][$clave + 2] = ["hora" => $fechas_finales[$fecha]['horas'][$clave + 2]["hora"], "estado" => 0];
                    }

                    if (array_key_exists($clave + 3, $fechas_finales[$fecha]['horas'])) {
                        $fechas_finales[$fecha]['horas'][$clave + 3] = ["hora" => $fechas_finales[$fecha]['horas'][$clave + 3]["hora"], "estado" => 0];
                    }

                    if (array_key_exists($clave - 1, $fechas_finales[$fecha]['horas'])) {
                        $fechas_finales[$fecha]['horas'][$clave - 1] = ["hora" => $fechas_finales[$fecha]['horas'][$clave - 1]["hora"], "estado" => 0];
                    }

                    if (array_key_exists($clave - 2, $fechas_finales[$fecha]['horas'])) {
                        $fechas_finales[$fecha]['horas'][$clave - 2] = ["hora" => $fechas_finales[$fecha]['horas'][$clave - 2]["hora"], "estado" => 0];
                    }

                }
            }

        }

        date_default_timezone_set('America/Argentina/Buenos_Aires');

        $fechaActual = date('Y-m-d', time());

        $turnsNoDisponibles = Turno::where("id_estado_turno", 2)->where("fecha", ">=", $fechaActual)->get();

        return view('jefetaller.turnosDispYnoDisp', ['disp' => $fechas_finales, 'noDisp' => $turnsNoDisponibles]);

    } //termina la llave de la funcion

//Consultar turnos cancelados del día
    public function TurnosHoy()
    {

        date_default_timezone_set('America/Argentina/Buenos_Aires');

        $fechaActual = date('Y-m-d', time());

        $turnosCancelados = DB::table("turnos")
            ->where("id_estado_turno", 3)->where("fecha", $fechaActual)->get();

        return view('jefetaller.turnosCanceladosDelDia', ["turnosCancelados" => $turnosCancelados]);

    }

//Consultar clientes por número de chasis

    public function mostrar()
    {

        return view("jefetaller.buscarClientePorChasis"); //muestra solo el form para colocar el chasis
    }

    public function buscarClientePorChasis(Request $request)
    {

        $chasis = $request->nro_chasis;
        $vehiculo = DB::table("vehiculos")->where("nro_chasis", $chasis)
            ->join('users', 'vehiculos.id_cliente', '=', 'users.id')->first();

        return view("jefetaller.clientePorChasis", ["clienteEncontrado" => $vehiculo]); //clienteEncontrado es lo que llamas despues en la vista clientePorChasis como variable para el if

    }

//Consultar vehículos por modelo de vehículo
    public function buscarModeloMostrar()
    {

        $modelos = DB::table("vehiculos")->select("modelo")->distinct()->get();
        return view("jefetaller.buscarVehiculosPorModelo", ["modelos" => $modelos]);
    }

    public function buscarModeloRecibir(Request $request)
    {
        //recibe de la request el modelo seleccionado, y busca los vehiculos que tengan ese modelo
        $nombreModeloSeleccionado = DB::table("vehiculos")->where("modelo", $request->modelo)->get();

        $nombreModeloSeleccionado = Vehiculo::where("modelo", $request->modelo)->get();

        return view("jefetaller.resultadoVehiculosPorModelo", ["nombreModeloSeleccionado" => $nombreModeloSeleccionado]);
    }

    public function consultarordenClienteVer()
    {
        return view("jefetaller.buscarOrdenPorDni");
    }

    public function consultarordenClienteBuscar(Request $request)
    {

        $clienteABuscar = User::where("dni", $request->dni)->first();

        if ($clienteABuscar) {

            $ordenesABuscar = OrdenReparacion::where("id_cliente", $clienteABuscar->id)->get();

            if (!0 == count($ordenesABuscar)) {

                return view("jefetaller.resultadoBusquedaOrdenes", ["ordenes" => $ordenesABuscar, "cliente" => $clienteABuscar]);
            } else {
                return redirect()->back()->withErrors(['El cliente no tiene ninguna orden de reparación']);

            }

        } else {
            return redirect()->back()->withErrors(['no se encontró un cliente con ese DNI']);

        };

    }

    public function mostrarOrden($id)
    {

        $ordenMostrar = OrdenReparacion::find($id);
        $detalle_orden = DetalleOrden::where("id_orden_reparacion", $ordenMostrar->id_orden_reparacion)->first();

        // return $detalleOrden;
        $orden = PDF::loadView('jefetaller.pdf.ordenreparacion',
            ["orden" => $ordenMostrar, "detalle_orden" => $detalle_orden]);
        return $orden->stream('Orden Reparación.pdf');
    }

//Consultar órdenes de reparación ingresadas, por cliente.
    //Consultar órdenes de reparación ingresadas, por número de chasis.



//Consultar mecánicos
    public function mecanicosRegistrados()
    {

        $totalMecanicos = Mecanico::all();

        return view("jefetaller.mecanicosRegistrados", ["totalMecanicos" => $totalMecanicos]);

    }

//Consultar vehículos registrados 
    public function vehiculosRegistrados()
    {

        $totalVehiculos = Vehiculo::all();

        return view("jefetaller.vehiculosRegistrados", ["totalVehiculos" => $totalVehiculos]);

    }

//Consultar tipos de servicios registrados
    public function serviciosRegistrados()
    {

        $totalServicios = TipoServicio::all();

        return view("jefetaller.serviciosRegistrados", ["totalServicios" => $totalServicios]);

    }

    public function mostrarORporChasis()
    {

        return view("eac.mostrarOrdenPorChasis");

    }

    public function buscarORPorChasis(Request $request)
    {

        $vehiculoABuscar = Vehiculo::where("nro_chasis", $request->nro_chasis)->first();

        if ($vehiculoABuscar) {

            $ordenesABuscar = OrdenReparacion::where("id_vehiculo", $vehiculoABuscar->id_vehiculo)->get();

            if (!0 == count($ordenesABuscar)) {

                return view("jefetaller.resultadoBusquedaOrdenes", ["ordenes" => $ordenesABuscar, "vehiculo" => $vehiculoABuscar]);
            } else {
                return redirect()->back()->withErrors(['El vehiculo no tiene ninguna orden de reparación']);

            }

        } else {
            return redirect()->back()->withErrors(['no se encontró un vehiculo con ese chasis']);

        };

    }

    public function turnosDiaPorModelo()
    {

        $turnos = Turno::with("vehiculo")->get();

        foreach ($turnos as $turno) {
            if (!$turno->vehiculo == null) {
                echo $turno->vehiculo->vehiculo_tipoVehiculo->tipoVehiculo;
                echo "
            ";
            }
        }

    }



    //************************************** REPORTES *****************************************************//

    //Reporte del total de turnos en el día por modelo de vehículo
    public function turnosPorModeloHoy()
    {

        $fechaActual = date('Y-m-d', time());

        // $turnosHoy = Turno::with("vehiculo")->where("fecha", $fechaActual)->get();

        //GET ES IGUAL A SELECT *

        $turnosConModelo = DB::table("vehiculos")
            ->join("turnos", 'vehiculos.id_vehiculo', '=', 'turnos.id_vehiculo')
            ->where("fecha", $fechaActual)
            ->get()
            ->groupBy("modelo");

        return view("jefetaller.turnosdiamodelo", ["turnosConModelo" => $turnosConModelo]);

    }

    public function generarPdfTurnosDiaModelo()
    {
        $fechaActual = date('Y-m-d', time());

        // $turnosHoy = Turno::with("vehiculo")->where("fecha", $fechaActual)->get();

        //GET ES IGUAL A SELECT *

        $turnosConModelo = DB::table("vehiculos")
            ->join("turnos", 'vehiculos.id_vehiculo', '=', 'turnos.id_vehiculo')
            ->where("fecha", $fechaActual)
            ->get()
            ->groupBy("modelo");

        $informe = PDF::loadView('jefetaller.pdf.turnosdiamodelo',
            ["turnosConModelo" => $turnosConModelo]);
        return $informe->stream('Turnos en el día por modelo.pdf');

    }

//Reporte de turnos por tipo de servicio
    public function turnosPorTipoServicio()
    {

        $tipos = TipoServicio::with("tiposervicio_turno")->get();

        return view("jefetaller.turnosPorTipoServicio", ["tipos" => $tipos]);

    }

    public function generarPdfTurnosPorTipoServicio()
    {
        $turnosPorTipo = TipoServicio::with("tiposervicio_turno")->get();

        $informe = PDF::loadView('jefetaller.pdf.turnosportipo',
            ["tipos" => $turnosPorTipo]);
        return $informe->stream('Turnos por tipo de servicio.pdf');

    }

//Reporte del total de turnos al final del día
    public function turnosFinalDia()
    {
         $fechaActual = date('Y-m-d', time());

        $turnos = Turno::with("vehiculo")->where("fecha", $fechaActual)->get()->groupBy("estado.estadoTurno");
        return view("jefetaller.turnosFinalDia", ["turnos" => $turnos]);
    }

    public function generarPdfturnosFinalDia()
    {
        $fechaActual = date('Y-m-d', time());

        $turnos = Turno::with("vehiculo")->where("fecha", $fechaActual)->get()->groupBy("estado.estadoTurno");

        $informe = PDF::loadView('jefetaller.pdf.turnosfinaldia',
            ["turnos" => $turnos]);
        return $informe->stream('Turnos al final del día.pdf');
    }


//Reporte del total de trabajos realizados por mecánico
    public function trabajosPorMecanicoMostrar()
    {
        $mecanicos = Mecanico::get();
        return view("jefetaller.buscarMecanicos", ["mecanicos" => $mecanicos]);
    }

    public function trabajosPorMecanicoGenerar(Request $request)
    {

        $mecanico = Mecanico::find($request->id_mecanico);
        $ordenes = OrdenReparacion::where("id_mecanico", $request->id_mecanico)->get();
        $vehiculos = Vehiculo::all(); //despues llamo en la vista (trabajospormecanico.blade) la funcion del modelo orden_vehiculo()
        
        $informe = PDF::loadView('jefetaller.pdf.trabajospormecanico',
        ["ordenes" => $ordenes,"mecanico"=>$mecanico, "vehiculos"=>$vehiculos]);
        return $informe->stream('Trabajos por Mecánico.pdf');

    }

//Reporte del total de OR ingresadas
    public function totalOrdenes(){
        $ordenes = OrdenReparacion::all();
        $mecanicos = Mecanico::all();
        return view ("jefetaller.totalOrdenesIngresadas", ["ordenes" => $ordenes, "mecanicos"=> $mecanicos]);
        
    }

    public function generarPDFtotalOrdenes(){
        $ordenes = OrdenReparacion::all();
        $mecanicos = Mecanico::all();

        $informe = PDF::loadview('jefetaller.pdf.totalordenes',
        ["ordenes" => $ordenes, "mecanicos"=> $mecanicos]);
        return $informe->stream('TotalOrdenesRegistradas.pdf');
        
    }


//Reporte de OR por estado de la órden
    public function ordenesPorEstado(){
        $ordenes = EstadoOrden::with("estados_orden")->get();

        return view ("jefetaller.ordenesReparacionPorEstado", ["ordenes" => $ordenes]);
    }

    public function generarPDFordenesPorEstado(){

        $ordenes = EstadoOrden::with("estados_orden")->get();

        $informe =  PDF::loadview('jefetaller.pdf.ordenesporestado',
        ["ordenes" => $ordenes]);
        return $informe->stream('OrdenesReparacionPorEstado.pdf');

    }

                                        //PENDIENTES!!!

//Reporte de vehículos por tipo de servicio
    public function vehiculosPorTipoServicio(){
        $tipoService = Turno::with("tipo")->with("vehiculo")->get()->groupBy("tipo.tipoServicio");

        return view ("jefetaller.buscarVehiculosPorTipoServicio", ["tipoService" => $tipoService]);
    }

    public function generarPDFvehiculosPorTipoServicio(){

        $tipoService = Turno::with("tipo")->with("vehiculo")->get()->groupBy("tipo.tipoServicio");
        $informe = PDF::loadview('jefetaller.pdf.vehiculosportipodeservicio',
        ["tipoService" => $tipoService]);
        return $informe->stream('VehiculosPorTipoDeServicio.pdf');

    }


//Reporte del total de vehiculos ingresados en el mes
    public function VehiculosMes(){

        $hoy = Carbon::now();
        $mesActual = $hoy->month;

        $vehiculosDelMes = Turno::with("vehiculo")->whereMonth('fecha', '=', $mesActual)->get();

        $vehiculosDelMes = $vehiculosDelMes->unique("id_vehiculo");
        return view ("jefetaller.vehiculosIngresadosEnElMes",
        ["vehiculosDelMes" => $vehiculosDelMes]);


    }

    public function vehiculoPeriodoMostrar(){
        return view("jefetaller.buscarperiodo");
    }

    public function vehiculoPeriodoResultado (Request $request){

        $desde = $request->desde;
        $hasta = $request->hasta;

        $vehiculosPeriodo = OrdenReparacion::where('fecha_ingreso_vehiculo', '>=', $desde)
        ->where("fecha_ingreso_vehiculo","<=",$hasta)
        ->orderBy("fecha_ingreso_vehiculo")
        ->get();

      $desde = strtotime($desde);
        $desde = date('d-m-Y', $desde);

        $hasta = strtotime($hasta);
        $hasta = date('d-m-Y', $hasta);

        return view("jefetaller.resultadosperiodo",["ordenes"=>$vehiculosPeriodo,"desde"=>$desde,"hasta"=>$hasta]);
    }

    public function periodoPDF(Request $request){

        $desde = $request->desde;
        $hasta = $request->hasta;

        $desde = strtotime($desde);
        $desde = date('Y-m-d', $desde);

        $hasta = strtotime($hasta);
        $hasta = date('Y-m-d', $hasta);

        $vehiculosPeriodo = OrdenReparacion::where('fecha_ingreso_vehiculo', '>=', $desde)
        ->where("fecha_ingreso_vehiculo","<=",$hasta)
        ->orderBy("fecha_ingreso_vehiculo")
        ->get();

      $desde = strtotime($desde);
        $desde = date('d-m-Y', $desde);

        $hasta = strtotime($hasta);
        $hasta = date('d-m-Y', $hasta);

        $informe = PDF::loadview('jefetaller.pdf.ordenesPeriodo',
        ["ordenes"=>$vehiculosPeriodo,"desde"=>$desde,"hasta"=>$hasta]);
        return $informe->stream('ordenesPeriodo.pdf');
        
     }

    public function generarPDFVehiculosMes(){
    
        $hoy = Carbon::now();
        $mesActual = $hoy->month;
        $vehiculosDelMes = Turno::with("vehiculo")->whereMonth('fecha', '=', $mesActual)->get();
        $vehiculosDelMes = $vehiculosDelMes->unique("id_vehiculo");

    

    $informe = PDF::loadview('jefetaller.pdf.vehiculosingresadosenelmes',
    ["vehiculosDelMes" => $vehiculosDelMes]);
    return $informe->stream('VehiculosDelMes.pdf');

    }

    public function verOrdenes(){

        $ordenes = OrdenReparacion::with("estado_ordenes")->with("orden_mecanico")->with("orden_vehiculo")->with("detalle_ordenes")->where("id_estado_orden",2)->get();
        return view ("jefetaller.ordenesdelcliente",["ordenes"=>$ordenes]);
    }

    public function actualizarOrdenMostrar(Request $request){

        $orden = OrdenReparacion::find($request->id);
        return view("jefetaller.actualizarFechaOrden",["orden"=>$orden]);

    }

    public function actualizarOrdenGuardar(Request $request){

        $ordenAActualizar = OrdenReparacion::find($request->id);

        $cliente = User::find($ordenAActualizar->id_cliente);


        $data = ['orden' => $ordenAActualizar,
        "cliente"=>$cliente,
        ];

        try{
            \Mail::send('mails.confirmacionorden', $data, function ($message) {

                $message->from('info@curvasud.com.ar', 'Curvasud');
        
                $message->to("cliente@curvasud.com.ar")->subject('Órden de Reparación completada');}
            
            );
        }
        catch(\Exception $e){
        }

 


        if ($request->fecha != $ordenAActualizar->fecha_egreso_vehiculo){
            $ordenAActualizar->update([
                "fecha_egreso_vehiculo"=>$request->fecha,
                "id_estado_orden"=>1
            ]);

            if(isset($e)){
                return redirect()->route("/jefetaller/verOrdenes")
                ->withErrors(['Órden marcada como finalizada con una nueva fecha correctamente. No se pudo enviar el mail debido a un problema de conectividad']);

            }

            return redirect()->route("/jefetaller/verOrdenes")->withErrors(['Órden marcada como finalizada con una nueva fecha correctamente ']);



        }else{

            $ordenAActualizar->update([
                "fecha_egreso_vehiculo"=>$request->fecha,
                "id_estado_orden"=>1
            ]);

            if(isset($e)){
                return redirect()->route("/jefetaller/verOrdenes")
                ->withErrors(['Órden marcada como finalizada con una nueva fecha correctamente. No se pudo enviar el mail debido a un problema de conectividad']);

            }

            return redirect()->route("/jefetaller/verOrdenes")->withErrors(['Órden marcada como finalizada correctamente ']);

        }
    


    }

    






}
