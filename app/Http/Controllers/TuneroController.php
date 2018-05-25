<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\Turno;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

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
        $fecha = strtotime($fecha);

        $fecha = date( 'Y/m/d', $fecha );

        $id_tipo_servicio = $request->id_tipo_servicio;
        $turnos_fecha = Turno::where("fecha",$fecha)->where("id_estado_turno",2)->get();


        $servicio = DB::table("tipos_servicios")->where("id_tipo_servicio",$id_tipo_servicio)->first();
      
        //Creamos un array de Fechas (Esto podría ser base de datos)

        $horas = array(
            ["hora"=>"08:00:00","estado"=>1],
            ["hora"=>"09:00:00","estado"=>1],
            ["hora"=>"10:00:00","estado"=>1],
            ["hora"=>"11:00:00","estado"=>1],
            ["hora"=>"12:00:00","estado"=>1],
            ["hora"=>"13:00:00","estado"=>1],
            ["hora"=>"14:00:00","estado"=>1],
            ["hora"=>"15:00:00","estado"=>1],
            ["hora"=>"16:00:00","estado"=>1],
            ["hora"=>"17:00:00","estado"=>1],
            ["hora"=>"17:00:00","estado"=>1],
            ["hora"=>"18:00:00","estado"=>1],
        );


        //Hacemos la comparación del Array con los turnos cargados en Database, 
        // y agregamos los ya tomados, junto con sus 3 horas siguientes y 2 anteriores
        foreach($turnos_fecha as $turno) {

            //clave es = a index o indice

            $clave = array_search($turno->hora, array_column($horas,"hora"));

            if($clave==0){

                    $horas[0] = ["hora"=>$horas[0]["hora"],"estado"=>0];
                    $horas[1] = ["hora"=>$horas[1]["hora"],"estado"=>0];
                    $horas[2] = ["hora"=>$horas[2]["hora"],"estado"=>0];

            }
            
            if($clave){
//Si la clave existe, significa que encontró un turno que se corresponde a algun horario.
// A través de la clave, comparamos el horario del turno con el array de horas para cambiar su estado
                $horas[$clave] = ["hora"=>$horas[$clave]["hora"],"estado"=>0];

                if (array_key_exists($clave+1,$horas)){
                    $horas[$clave + 1] = ["hora"=>$horas[$clave+1]["hora"],"estado"=>0];
                }

                if (array_key_exists($clave+2,$horas)){
                    $horas[$clave + 2] = ["hora"=>$horas[$clave+2]["hora"],"estado"=>0];
                }

                if (array_key_exists($clave+3,$horas)){
                    $horas[$clave + 3] =["hora"=>$horas[$clave+3]["hora"],"estado"=>0];
                }

                if (array_key_exists($clave-1,$horas)){
                    $horas[$clave - 1] =["hora"=>$horas[$clave-1]["hora"],"estado"=>0];
                }

                if (array_key_exists($clave-2,$horas)){
                    $horas[$clave - 2] =["hora"=>$horas[$clave-2]["hora"],"estado"=>0];
                }

            }
        }





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

    public function eliminar(Request $request){
        $user =  Auth::user();

        //Desencriptamos el id del turno
        $id_turno = Crypt::decryptString($request->id_turno);
       //Con el método FIND buscamos un turno que tenga ese id, devuelve un array
        $turno_a_eliminar = Turno::find($id_turno);
        //definimos del turno que ya existe, que es un array, que su id_estado_turno va a ser 3
        $turno_a_eliminar->id_estado_turno = 3;
        //SIEMPRE usar save() para guardar los datos
        $turno_a_eliminar->save();

        $turno = Turno::where("id_cliente",$user->id)->where("id_estado_turno",2)->first();
        $turnoEncriptado = Crypt::encryptString($turno->id_turno);
        return view("cliente.bienvenida",["turno"=>$turno,"turnoEncriptado"=>$turnoEncriptado]);

    }

    public function cambiar(Request $request){
        $user =  Auth::user(); //scopes local

        //Desencriptamos el id del turno
        $id_turno = Crypt::decryptString($request->id_turno);

        //Con el método FIND buscamos un turno que tenga ese id, devuelve un array
        $turno_a_cambiar = Turno::find($id_turno);

        //Verifcamos que no exista un turno registrado con esa misma fecha y hora

        $validacion = Turno::where("fecha", $request->fecha)->where("hora", $request->hora)->first();
       

        
        $clave = array_search($validacion->hora, array_column($horas,"hora"));
        
        
        if(!$validacion){
        

            // de ca par aabajo guardar turno

            $turno_a_cambiar->fecha = $request->fecha;
            $turno_a_cambiar->hora = $request->hora;
            $turno_a_cambiar->save();
            return $turno_a_cambiar;
        }else{
            return "El turno ya esta ocupado";
        }
        //definimos del turno que ya existe, que es un array, que su id_estado_turno va a ser 3
       

       

    }
}
