<?php

namespace App\Http\Controllers;

use App\DetalleOrden;
use App\OrdenReparacion;
use App\TipoVehiculo;
use App\Turno;
use App\User;
use App\Vehiculo;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class EacController extends Controller
{

    public function __construct()
    {

        $this->middleware('eac', ['except' => ['vehiculoclienteajax']]);
    }

    public function escritorioEac()
    {
        $user = Auth::user();

        if (!empty($user)) {

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


            //GENERACION DE GRAFICO DE TURNOS CANCELADOS POR CLIENTE

            $clientesConTurnosCancelados = User::with("turnos_cancelados")->get();

            //nombre de los clientes
            $clientesCancelados = [];
            //cantidad de turnos cancelados por cliente
            $cantidadTurnosporCliente = [];
            //array donde se insertarán colores
            $colores = [];

            foreach ($clientesConTurnosCancelados as $cliente) {
                if ($cliente->turnos_cancelados->count() > 0) {
                    array_push($clientesCancelados, ''.$cliente->nombre.' '.$cliente->apellido);
                    array_push($cantidadTurnosporCliente, $cliente->turnos_cancelados->count());
                    array_push($colores, sprintf('#%06X', mt_rand(0, 0xFFFFFF)));
                }
            }

            $chartjs = app()->chartjs
                ->name('ClientesTurnosCancelados')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels($clientesCancelados)
                ->datasets([
                    [
                        'backgroundColor' => $colores,
                        'hoverBackgroundColor' => $colores,
                        'data' => $cantidadTurnosporCliente,
                    ],
                ])
                ->options([]);

            // CANTIDAD DE VEHICULOS POR TIPO

            $tipos_vehiculos = TipoVehiculo::with("tipovehiculo_vehiculo")->get();
            $total_vehiculos = [];
            $nombres_tipos_vehiculos = [];
            $colores_tipos = [];

            foreach ($tipos_vehiculos as $tipo) {
                array_push($total_vehiculos, $tipo->tipovehiculo_vehiculo->count());
                array_push($nombres_tipos_vehiculos, $tipo->tipoVehiculo);
                array_push($colores_tipos, sprintf('#%06X', mt_rand(0, 0xFFFFFF)));
            }

            $chartjs2 = app()->chartjs
                ->name('ClientesPorTipoVehiculo')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels($nombres_tipos_vehiculos)
                ->datasets([
                    [
                        'backgroundColor' => $colores_tipos,
                        'hoverBackgroundColor' => $colores_tipos,
                        'data' => $total_vehiculos,
                    ],
                ])
                ->options([]);

            return view("eac.bienvenida", ["turnosHoy" => $turnosHoy, "chartjs" => $chartjs, "chartjs2" => $chartjs2]);

        }
        return "No tienes permiso para acceder";
    }

    private function getDatesFromRange($date_time_from, $date_time_to)
    {

        // cut hours, because not getting last day when hours of time to is less than hours of time_from
        // see while loop
        $start = Carbon::createFromFormat('Y-m-d', substr($date_time_from, 0, 10));
        $end = Carbon::createFromFormat('Y-m-d', substr($date_time_to, 0, 10));

        $dates = [];

        while ($start->lte($end)) {

            $dates[] = $start->copy()->format('Y-m-d');

            $start->addDay();
        }

        return $dates;
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

        return view('eac.consultaDispTurnos', ['disp' => $fechas_finales, 'noDisp' => $turnsNoDisponibles]);

    } //termina la llave de la funcion

    //Consultar turnos cancelados del día
    public function TurnosHoy()
    {

        date_default_timezone_set('America/Argentina/Buenos_Aires');

        $fechaActual = date('Y-m-d', time());

        $turnosCancelados = DB::table("turnos")
            ->where("id_estado_turno", 3)->where("fecha", $fechaActual)->get();

        return view('eac.canceladosDelDia', ["turnosCancelados" => $turnosCancelados]);

    }

    //Consultar clientes registrados
    public function clientesRegistrados()
    {

        $totalClientes = DB::table("users")->where("tipo_user_id", 1)->get();

        return view("eac.clientesRegistrados", ["totalClientes" => $totalClientes]);

    }

    //Consultar clientes por modelo de vehiculo

    public function buscarModeloMostrar()
    {

        $modelos = DB::table("vehiculos")->select("modelo")->distinct()->get();
        return view("eac.buscarModelo", ["modelos" => $modelos]);
    }

    public function buscarModeloRecibir(Request $request)
    {
        //recibe de la request el modelo seleccionado, y busca los vehiculos que tengan ese modelo
        $nombreModeloSeleccionado = DB::table("vehiculos")->where("modelo", $request->modelo)->get();

        $nombreModeloSeleccionado = Vehiculo::where("modelo", $request->modelo)->get();

        return view("eac.resultadoModelo", ["nombreModeloSeleccionado" => $nombreModeloSeleccionado]);
    }

    //Consultar clientes por nro de chasis
    public function mostrar()
    {

        return view("eac.buscarPorChasis"); //muestra solo el form para colocar el chasis
    }

    public function buscarClientePorChasis(Request $request)
    {

        $chasis = $request->nro_chasis;
        $vehiculo = Vehiculo::with("vehiculo_cliente")->where("nro_chasis", $chasis)->first();

        return view("eac.clientePorChasis", ["clienteEncontrado" => $vehiculo]); //clienteEncontrado es lo que llamas despues en la vista clientePorChasis como variable para el if

    }

    

    //Consultar órdenes de reparación ingresadas, por cliente (tener en cuenta que un cliente puede tener varios vehiculos).
    public function mostrarORporCliente()
    {

        return view("eac.mostrarOrdenPorCliente");

    }

    public function buscarORPorCliente(Request $request)
    {

        $dni = $request->dni;
        //ingresa el dni, pero el sistema debe saber qué vehiculo es de ese cliente para que se genere la orden de ese vehiculo en pdf
        //tener en cuenta qué órdenes se van a generar (filtrando por fecha o algo asi)
    }

    //Consultar órdenes de reparación ingresadas, por nro_chasis.
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

    //Consultar clientes por tipo de vehiculo.
    public function buscarClientePorVehiculo()
    {

        $consulta = TipoVehiculo::with("tipovehiculo_vehiculo")->get();
        return view("eac.clientesPorTipoVehiculo", ["vehiculos" => $consulta]);
    }

    //Consultar clientes con turnos cancelados
    public function clientesTurnosCancelados()
    {
        $clientesConTurnosCancelados = User::with("turnos_cancelados")->get();

        return view("eac.clientesturnoscancelados", ["clientesConTurnosCancelados" => $clientesConTurnosCancelados]);
    }

    //Funciones para devolver página de consultas y reportes
    public function mostrarPagina($pagina)
    {

        if ($pagina == "consultas") {
            return view("eac.consultas");
        }
        return view("eac.reportes");
    }

    //AJAX
    public function vehiculoclienteajax($id)
    {

        $vehiculos = Vehiculo::where("id_cliente", $id)->where("cancelado", 0)->get();
        echo json_encode($vehiculos);
        die();

    }

    /////-----------------------------REPORTES (PDF)----------------------------/////

    //Generar un informe del total de clientes por tipo de vehiculo
    public function reporteClientes()
    {

        $consulta = TipoVehiculo::with("tipovehiculo_vehiculo")->get();

        $reporte = PDF::loadView('eac.pdf.clientesportipo', ["vehiculos" => $consulta]);
        return $reporte->stream('clientesportipo.pdf');
    }

    //Generar un informe de clientes con turnos cancelados
    public function reporteCancelados()
    {
        $clientesConTurnosCancelados = User::with("turnos_cancelados")->get();

        $reporte = PDF::loadView('eac.pdf.clientesturnoscancelados', ["clientesConTurnosCancelados" => $clientesConTurnosCancelados]);
        return $reporte->stream('clientesportipo.pdf');
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

}
