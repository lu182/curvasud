<?php

namespace App\Http\Controllers;

use App\Turno;
use App\Vehiculo;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;

class TuneroController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $vehiculos = Vehiculo::where("id_cliente", Auth::user()->id)->get();
        $tipos_servicio = DB::table("tipos_servicios")->get();
        return view("turnero.registrar", ["tipos_servicio" => $tipos_servicio,"vehiculos"=>$vehiculos]);

    }

    public function editar_ver()
    {
        $tipos_servicio = DB::table("tipos_servicios")->get();
        return view("turnero.editar", ["tipos_servicio" => $tipos_servicio]);
    }

    public function registrar(Request $request)
    {

        $id_vehiculo = $request->id_vehiculo;
        $fecha = $request->fecha;
       $fecha = strtotime($fecha);
        $turnos_registrados_vehiculo = Turno::where("id_vehiculo",$id_vehiculo)->where("id_estado_turno",2)->get();
        $id_tipo_servicio = $request->id_tipo_servicio;
        $fecha = date('Y-m-d', $fecha);

        //Primera validación: Que no exista un turno ya registrado para ese mismo tipo de servicio

        foreach($turnos_registrados_vehiculo as $turno){

            if($turno->id_tipo_servicio == $request->id_tipo_servicio){
                return redirect()->route('turnero')->withErrors(['Ya tienes un turno registrado con ese tipo de servicio']);
            }


            // El id de tipo de servicio es mayor al que ya esta registrado
            // La fecha que quiero registrar es menor a la que ya está registrada


            if($fecha < $turno->fecha and $id_tipo_servicio > $turno->id_tipo_servicio){
                return redirect()->route('turnero')->withErrors(['Ya tienes un turno registrado con un tipo de servicio anterior']);

            }


            if($fecha > $turno->fecha and $id_tipo_servicio < $turno->id_tipo_servicio){
                return redirect()->route('turnero')->withErrors(['Ya tienes un turno registrado con un tipo de servicio anterior']);

            }


        }












        $turnos_fecha = Turno::where("fecha", $fecha)->where("id_estado_turno", 2)->get();

        $servicio = DB::table("tipos_servicios")->where("id_tipo_servicio", $id_tipo_servicio)->first();

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

        //Hacemos la comparación del Array con los turnos cargados en Database,
        // y agregamos los ya tomados, junto con sus 3 horas siguientes y 2 anteriores
        foreach ($turnos_fecha as $turno) {

            //clave es = a index o indice

            $clave = array_search($turno->hora, array_column($horas, "hora"));

            if ($clave == 0) {

                $horas[0] = ["hora" => $horas[0]["hora"], "estado" => 0];
                $horas[1] = ["hora" => $horas[1]["hora"], "estado" => 0];

            }

            if ($clave) {
//Si la clave existe, significa que encontró un turno que se corresponde a algun horario.
                // A través de la clave, comparamos el horario del turno con el array de horas para cambiar su estado
                $horas[$clave] = ["hora" => $horas[$clave]["hora"], "estado" => 0];

                if (array_key_exists($clave + 1, $horas)) {
                    $horas[$clave + 1] = ["hora" => $horas[$clave + 1]["hora"], "estado" => 0];
                }


                if (array_key_exists($clave - 1, $horas)) {
                    $horas[$clave - 1] = ["hora" => $horas[$clave - 1]["hora"], "estado" => 0];
                }

            }
        }

        return view("turnero.hora", ["id_vehiculo"=>$id_vehiculo,"fecha" => $fecha, "horas" => $horas, "servicio" => $servicio, "turnos_fecha" => $turnos_fecha]);

    }

    public function guardarTurno(Request $request)
    {

        $turno = Turno::create($request->all());

        $usuario = Auth::user();
        $turnos = Turno::where("id_cliente", $usuario->id)->where("id_estado_turno", 2)->get();
        $tipos_servicio = DB::table("tipos_servicios")->get();
        return Redirect::route('misturnos')->withErrors(['Turno registrado correctamente. Gracias por utilizar CurvaSud']);

    }

    public function verTurnos()
    {
        $usuario = Auth::user();
        $turnos = Turno::with("tipo")->where("id_cliente", $usuario->id)->where("id_estado_turno", 2)->get();

        $tipos_servicio = DB::table("tipos_servicios")->get();
        //return $turnos;
        return view("cliente.misturnos", ["turnos" => $turnos, "tipos_servicio" => $tipos_servicio]);

    }

    public function eliminar(Request $request) //SE ELIMINA DE LA VIEW PERO NO DE LA BD
    {
        $user = Auth::user();

        //Desencriptamos el id del turno
        $id_turno = Crypt::decryptString($request->id_turno);
        //Con el método FIND buscamos un turno que tenga ese id, devuelve un array
        $turno_a_eliminar = Turno::find($id_turno);
        //definimos del turno que ya existe, que es un array, que su id_estado_turno va a ser 3
        $turno_a_eliminar->id_estado_turno = 3;
        //SIEMPRE usar save() para guardar los datos
        $turno_a_eliminar->save();

        $turno = Turno::where("id_cliente", $user->id)->where("id_estado_turno", 2)->first();

        if ($turno) {
            $turnoEncriptado = Crypt::encryptString($turno->id_turno);

            return view("cliente.bienvenida", ["turno" => $turno, "turnoEncriptado" => $turnoEncriptado, "tieneTurno" => 1]);

        } else {
            return view("cliente.bienvenida", ["tieneTurno" => 0]);

        }

    }

    public function cambiar(Request $request)
    {
        $user = Auth::user(); //scopes local

        //Desencriptamos el id del turno
        $id_turno = Crypt::decryptString($request->id_turno);

        //Con el método FIND buscamos un turno que tenga ese id, devuelve un array
        $turno_a_cambiar = Turno::find($id_turno);

        //Verifcamos que no exista un turno registrado con esa misma fecha y hora

        $validacion = Turno::where("fecha", $request->fecha)->where("hora", $request->hora)->where("id_estado_turno",2)->first();

        $clave = array_search($validacion->hora, array_column($horas, "hora"));

        if (!$validacion) {

            // de aca para abajo guardar turno

            $turno_a_cambiar->fecha = $request->fecha;
            $turno_a_cambiar->hora = $request->hora;
            $turno_a_cambiar->save();
            return $turno_a_cambiar;
        } else {
            return "El turno ya esta ocupado";
        }


    }

    public function cambiar_tipo_servicio(Request $request)
    {

        $id_turno = Crypt::decryptString($request->id_turno);

        $turno_a_cambiar = Turno::find($id_turno);
        $turno_a_cambiar->id_tipo_servicio = $request->id_tipo_servicio;
        $turno_a_cambiar->save();
        return Redirect::back()->withErrors(['Turno Modificado correctamente']);

    }

    public function cambiar_fecha(Request $request)
    {
        $vehiculos = Vehiculo::where("id_cliente", Auth::user()->id)->get();

        $id_turno = Crypt::decryptString($request->id_turno);
        $turno_a_editar = Turno::find($id_turno);
        return view("turnero.editar", ['turno' => $turno_a_editar]);

    }

    public function ver_fechas_disponibles(Request $request)
    {

        $id_turno = Crypt::decryptString($request->id_turno);
        $turno_a_editar = Turno::find($id_turno);
        $id_vehiculo = $turno_a_editar->id_vehiculo;
        $id_tipo_servicio = $turno_a_editar->id_tipo_servicio;
        $fecha = $request->fecha;
        $fecha = strtotime($fecha);

        $fecha = date('Y-m-d', $fecha);


        $turnos_registrados_vehiculo = Turno::where("id_vehiculo",$id_vehiculo)->where("id_estado_turno",2)->get();

        foreach($turnos_registrados_vehiculo as $turno){




            // El id de tipo de servicio es mayor al que ya esta registrado
            // La fecha que quiero registrar es menor a la que ya está registrada


            if($fecha < $turno->fecha and $id_tipo_servicio > $turno->id_tipo_servicio){
                return redirect()->route('misturnos')->withErrors(['Ya tienes un turno registrado con un tipo de servicio anterior']);

            }


        }


        $turnos_fecha = Turno::where("fecha", $fecha)->where("id_estado_turno", 2)->get();

        //Creamos un array de horas

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

        //Hacemos la comparación del Array con los turnos cargados en Database,
        // y agregamos los ya tomados, junto con sus 3 horas siguientes y 2 anteriores
        foreach ($turnos_fecha as $turno) {

            //clave es = a index o indice

            $clave = array_search($turno->hora, array_column($horas, "hora"));

            if ($clave == 0) {

                $horas[0] = ["hora" => $horas[0]["hora"], "estado" => 0];
                $horas[1] = ["hora" => $horas[1]["hora"], "estado" => 0];

            }

            if ($clave) {
//Si la clave existe, significa que encontró un turno que se corresponde a algun horario.
                // A través de la clave, comparamos el horario del turno con el array de horas para cambiar su estado
                $horas[$clave] = ["hora" => $horas[$clave]["hora"], "estado" => 0];

                if (array_key_exists($clave + 1, $horas)) {
                    $horas[$clave + 1] = ["hora" => $horas[$clave + 1]["hora"], "estado" => 0];
                }

                if (array_key_exists($clave - 1, $horas)) {
                    $horas[$clave - 1] = ["hora" => $horas[$clave - 1]["hora"], "estado" => 0];
                }




            }
        }

        return view("turnero.cambiarhora", ["fecha" => $fecha, "horas" => $horas, "turnos_fecha" => $turnos_fecha, "turno" => $turno_a_editar]);

    }

    public function actualizarTurno(Request $request)
    {

        $id_turno = Crypt::decryptString($request->id_turno);
        $turno_a_editar = Turno::find($id_turno);

        $turno_a_editar->fecha = $request->fecha;
        $turno_a_editar->hora = $request->hora;
        //return $turno_a_editar; //me devuelve otro id_turno y otro id_estado_turno a comparacion de la BD
        $turno_a_editar->save();

        $usuario = Auth::user();
        $turnos = Turno::with("tipo")->where("id_cliente", $usuario->id)->where("id_estado_turno", 2)->get();

        $tipos_servicio = DB::table("tipos_servicios")->get();

        return redirect()->route("misturnos")->withErrors(['Turno modificado correctamente']);;
    }

}
