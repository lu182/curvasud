<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\Turno;
use Illuminate\Support\Facades\Auth;

class TuneroController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $tipos_servicio = DB::table("tipos_servicios")->get();
      return view("turnero.registrar",["tipos_servicio"=>$tipos_servicio]);

    }

    public function registrar(Request $request){

        $fecha = $request->fecha;

        $id_tipo_servicio = $request->id_tipo_servicio;


        $servicio = DB::table("tipos_servicios")->where("id_tipo_servicio",$id_tipo_servicio)->first();
        $horas = ["08:00:00","09:00:00","10:00:00","11:00:00","12:00:00","13:00:00","14:00:00","15:00:00","16:00:00","17:00:00","18:00:00"];


        $turnos_fecha = Turno::where("fecha",$fecha)->get();

     

        return view("turnero.hora",["fecha"=>$fecha,"horas"=>$horas,"servicio"=>$servicio,"turnos_fecha"=>$turnos_fecha]);

    }

    public function guardarTurno(Request $request){

        $turno = Turno::create($request->all());
        
        $usuario = Auth::user();
        $turnos = Turno::where("id_cliente",$usuario->id)->get();
        return view("cliente.misturnos",["turnos"=>$turnos])->with('success', ['Turno Registrado Correctamente']);   
      

    }

    public function verTurnos(){
        $usuario = Auth::user();
        $turnos = Turno::with("tipo")->where("id_cliente",$usuario->id)->get();
     
        return view("cliente.misturnos",["turnos"=>$turnos])->with('success', ['Turno Registrado Correctamente']);   

    }
}
