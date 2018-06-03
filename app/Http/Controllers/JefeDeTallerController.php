<?php

namespace App\Http\Controllers;
use App\User;
use App\Vehiculo;
use App\TipoVehiculo;
use App\Turno;
use App\OrdenReparacion;
use App\DetalleOrden;
use App\TipoServicio;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use PDF;

class JefeDeTallerController extends Controller
{


    public function bienvenida(){

        return view("jefetaller.bienvenida");
        
    }

    public function mostrarFormOrden(){


        $clientes = User::where("tipo_user_id",1)->get();
        $vehiculos = Vehiculo::get();
        $tipos_servicio = TipoServicio::get();

        return view('jefetaller.ordenreparacion',["clientes"=>$clientes, "vehiculos"=>$vehiculos,"tipos_servicio"=>$tipos_servicio]);



    }

    public function registrarOrden(Request $request){


        // Fecha actual (Ingreso)
        // Fecha estimada Egreso
        // Nombre de quien lo generó (Usuario)

        //Detales del Cliente
        //Detalles del Vehiculo

        //Motivo del Ingreso (Viene desde Turno)

        //Llena datos adicionales



        $fecha_ingreso =  date('Y-m-d', time());
        $fecha_estimada_egreso = $request->fecha_estimada_egreso;

        $generada_por =  Auth::user()->nombre;
        $cliente = User::find($request->cliente);
        $vehiculo = Vehiculo::find($request->vehiculo);

        $motivo_ingreso = $request->motivo_ingreso;
        $operacion_realizada = $request->operacion_realizada;
        $observaciones = $request->observaciones;
        $extra = $request->extra;
        $km = $request->km;

        $realizado_por = "Jorge Gonzales";


        $orden = PDF::loadView('jefetaller.pdf.ordenreparacion', 
    
        ["fecha_ingreso"=>$fecha_ingreso,
        "fecha_estimada_egreso"=>$fecha_estimada_egreso,
        "generada_por"=>$generada_por,
        "cliente"=>$cliente,
        "vehiculo"=>$vehiculo,
        "motivo_ingreso"=>$motivo_ingreso,
        "operacion_realizada"=>$operacion_realizada,
        "observaciones"=>$observaciones,
        "extra"=>$extra,
        "km"=>$km,
        "realizado_por"=>$realizado_por
        ]
    );
        return $orden->stream('orden.pdf');

    }










}


//Consultar turnos disponibles y no disponibles
//Consultar turnos cancelados del día

//Consultar clientes por número de chasis 

//Consultar vehículos por modelo de vehículo
//Consultar órdenes de reparación ingresadas, por cliente.
//Consultar órdenes de reparación ingresadas, por número de chasis.
//Reporte del total de turnos en el día por modelo de vehículo 
//Reporte de turnos por tipo de servicio 
//Reporte del total de turnos al final del día 
//Reporte del total de trabajos realizados por mecánico 
//Reporte de vehículos por tipo de servicio 
//Reporte del total de OR registradas 
//Reporte de OR por estado de la órden 
//Reporte del total de vehiculos ingresados en el mes
//Emitir órden de reparación (PDF)

//Registrar mecánicos *
//Consultar mecánicos *
//Registrar órden de reparación *
//Consultar vehículos registrados *
//Consultar tipos de servicios registrados *
