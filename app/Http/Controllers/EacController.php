<?php

namespace App\Http\Controllers;

use App\User;
use App\Vehiculo;
use App\TipoVehiculo;
use App\Turno;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use PDF;

class EacController extends Controller
{
    public function escritorioEac()
    {
        $user = Auth::user();

        if (!empty($user)) {

            if ($user->tipo_user_id > 1) {
                return view("eac.bienvenida");

            }

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
        $end = Carbon::createFromFormat('Y-m-d', substr(Carbon::now()->addDays(10), 0, 10));

        $fechas = [];

        while ($start->lte($end)) {

            $fechas[] = $start->copy()->format('Y-m-d');

            $diaAgregar = $start->addDay();

            
        }


       foreach ($fechas as $fecha){


       $turnos_fecha = Turno::where("fecha", $fecha)->where("id_estado_turno", 2)->get();

      // $servicio = DB::table("tipos_servicios")->where("id_tipo_servicio", $id_tipo_servicio)->first();

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
       $fechas_finales[$fecha]=['fecha'=>$fecha,"horas"=>$horas];

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

      //return $fechas_finales;

         date_default_timezone_set('America/Argentina/Buenos_Aires');

        $fechaActual = date('Y-m-d', time());

        $turnsNoDisponibles = Turno::where("id_estado_turno", 2)->where("fecha",">=",$fechaActual)->get();

        return view('eac.consultaDispTurnos', ['disp' => $fechas_finales, 'noDisp' => $turnsNoDisponibles]);
    }

    //Consultar turnos cancelados del día
    public function TurnosHoy()
    {
        //VER !!! 
         date_default_timezone_set('America/Argentina/Buenos_Aires');

        $fechaActual = date('Y-m-d', time());

        // $turnosHoy = DB::table("turnos")->where("fecha",$fechaActual)->get();

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

        return view("eac.buscarPorChasis"); //muestra solo el form
    }

    public function buscarClientePorChasis(Request $request)
    {

        $chasis = $request->nro_chasis;
        $vehiculo = DB::table("vehiculos")->where("nro_chasis", $chasis)
            ->join('users', 'vehiculos.id_cliente', '=', 'users.id')->first();

        //  return $vehiculo;join

        return view("eac.clientePorChasis", ["clienteEncontrado" => $vehiculo]);

    }

    //Consultar órdenes de reparación ingresadas, por cliente.

    //Consultar órdenes de reparación ingresadas, por nro_chasis.

    //Reporte del total de clientes por tipo de vehiculo.
    public function buscarClientePorVehiculo()
    {

    //    return Vehiculo::with("user", "vehiculo_tipoVehiculo")->orderBy()->get()->groupBy('id_tipo_vehiculo');


    $consulta = TipoVehiculo::with("tipovehiculo_vehiculo")->get();
        return view("eac.clientesPorTipoVehiculo",["vehiculos"=>$consulta]);
    }

    //Reporte de clientes con turnos cancelados
    public function clientesTurnosCancelados()
    {
        $clientesConTurnosCancelados = User::with("turnos_cancelados")->get();



        return view("eac.clientesturnoscancelados",["clientesConTurnosCancelados"=>$clientesConTurnosCancelados]);
    }

//return view ("eac.clientesRegistrados", ["totalClientes"=> $totalClientes]);

//$turnosCancelados = DB::table("turnos")->where("id_estado_turno", 3)->where("fecha",$fechaActual)->get();

//return view('eac.canceladosDelDia', ["turnosCancelados"=>$turnosCancelados]);

    //Funciones para devolver página de consultas y reportes
    public function mostrarPagina($pagina)
    {

        if ($pagina == "consultas") {
            return view("eac.consultas");
        }
        return view("eac.reportes");
    }

    public function reporteClientes(){

        $consulta = TipoVehiculo::with("tipovehiculo_vehiculo")->get();

        $reporte = PDF::loadView('eac.pdf.clientesportipo', ["vehiculos"=>$consulta]);
        return $reporte->stream('clientesportipo.pdf');
    }

    public function reporteCancelados()
    {
        $clientesConTurnosCancelados = User::with("turnos_cancelados")->get();


        $reporte = PDF::loadView('eac.pdf.clientesturnoscancelados', ["clientesConTurnosCancelados"=>$clientesConTurnosCancelados]);
        return $reporte->stream('clientesportipo.pdf');
    }

    public function vehiculoclienteajax($id){

        $vehiculos = Vehiculo::where("id_cliente",$id)->where("cancelado",0)->get();
        echo json_encode($vehiculos);
        die();

    }

}