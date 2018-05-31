<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class EacController extends Controller
{
    public function verTurnos(){
      
        $turnosDiponibles = DB::table("turnos")->whereIn("id_estado_turno",[1,3])->get();
        $turnsNoDisponibles = DB::table("turnos")->where("id_estado_turno", 2)->get();
        
        return view ('eac.consultaDispTurnos', ['disp'=> $turnosDiponibles, 'noDisp'=> $turnsNoDisponibles]);
    }

    public function TurnosHoy(){

        $fechaActual = date('Y-m-d', time());
        $turnosHoy = DB::table("turnos")->where("fecha",$fechaActual)->get();
        
    }
}
