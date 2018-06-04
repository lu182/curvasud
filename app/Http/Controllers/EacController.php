<?php

namespace App\Http\Controllers;

use App\User;
use App\Vehiculo;
use App\TipoVehiculo;
use App\Turno;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    //Consultar turnos disponibles y no disponibles
    public function verTurnos()
    {

        date_default_timezone_set('America/Argentina/Buenos_Aires');

        $fechaActual = date('Y-m-d', time());

        $turnosDiponibles = Turno::whereIn("id_estado_turno", [1, 3])->where("fecha",">=",$fechaActual)->get();
        $turnsNoDisponibles = Turno::where("id_estado_turno", 2)->where("fecha",">=",$fechaActual)->get();

        return view('eac.consultaDispTurnos', ['disp' => $turnosDiponibles, 'noDisp' => $turnsNoDisponibles]);
    }

    //Consultar turnos cancelados del día
    public function TurnosHoy()
    {
        date_default_timezone_set('America/Argentina/Buenos_Aires');

        $fechaActual = date('Y-m-d', time());

        // $turnosHoy = DB::table("turnos")->where("fecha",$fechaActual)->get();

        $turnosCancelados = DB::table("turnos")->where("id_estado_turno", 3)->where("fecha", $fechaActual)->get();

        return view('eac.canceladosDelDia', ["turnosCancelados" => $turnosCancelados]);

    }

    //Consultar clientes registrados
    public function clientesRegistrados()
    {

        $totalClientes = DB::table("users")->where("tipo_user_id", 1)->select('nombre', 'apellido', 'telefono')->get();

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

}
