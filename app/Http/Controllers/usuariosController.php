<?php

namespace App\Http\Controllers;

use App\Ciudad;
use App\Turno;
use App\User;
use App\Vehiculo;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;

class usuariosController extends Controller
{
    public function __construct()
    {

    }

    public function escritorio()
    {

        $user = Auth::user();


        if (!Auth::check()) {
            return view("prueba");

        }

        //Llama al usuario logueado y lo almacena en una variable $user

        //Comienza un switch para verificar el tipo de usuario
        //
        switch ($user->tipo_user_id) {
            case 1:
                //Verifica que el usuario tiene un tipo_user_id = 1, lo que significa que es un cliente
                //Por ello, le devuelve la vista de bienvenida para clientes

                //estado 2 de turno sabemos que es un turno ocupado, o sea que el usuario va a tenerlo

        if (isset($user)) {
//Llama al usuario logueado y lo almacena en una variable $user

            //Comienza un switch para verificar el tipo de usuario
            //
            switch ($user->tipo_user_id) {
                case 1:
                    //Verifica que el usuario tiene un tipo_user_id = 1, lo que significa que es un cliente
                    //Por ello, le devuelve la vista de bienvenida para clientes

                    //estado 2 de turno sabemos que es un turno ocupado, o sea que el usuario va a tenerlo

                    $fecha_actual = Carbon::now();
                    $año = $fecha_actual->year;
                    $mes = $fecha_actual->month;
                    if ($mes < 10) {
                        $mes = "0" . $mes;
                    }
                    $dia = $fecha_actual->day;
                    $fecha_a_buscar = $año . "-" . $mes . "-" . $dia;
                    $user = Auth::user();
                    //return view("cliente.bienvenida");
                    $turno = Turno::where("id_estado_turno", 2)
                        ->where("fecha", '>', $fecha_a_buscar)
                        ->where("id_cliente", Auth::user()->id)
                        ->orderBy('fecha', 'asc')
                        ->first();

                    if ($turno) {
                        $turnoEncriptado = Crypt::encryptString($turno->id_turno);
                        return view("cliente.bienvenida", ["turno" => $turno, "turnoEncriptado" => $turnoEncriptado, "tieneTurno" => 1]);
                    } else {
                        return view("cliente.bienvenida", ["tieneTurno" => 0]);
                    }
                case 2:
                    //Verifica que el usuario tiene un tipo_user_id = 1, lo que significa que es un cliente
                    //Por ello, le devuelve la vista de bienvenida para clientes
                    return view("eac.bienvenida");
                case 3:
                    return view("jefetaller.bienvenida");
                case 4:
                    $fecha_actual = Carbon::now();
                    $año = $fecha_actual->year;
                    $mes = $fecha_actual->month;
                    if ($mes < 10) {
                        $mes = "0" . $mes;
                    }
                    $dia = $fecha_actual->day;
                    $fecha_a_buscar = $año . "-" . $mes . "-" . $dia;
                    $user = Auth::user();
                    //return view("cliente.bienvenida");
                    $turno = Turno::where("id_estado_turno", 2)
                        ->where("fecha", '>', $fecha_a_buscar)
                        ->orderBy('fecha', 'asc')
                        ->first();

                    if ($turno) {
                        $turnoEncriptado = Crypt::encryptString($turno->id_turno);

                        return view("cliente.bienvenida", ["turno" => $turno, "turnoEncriptado" => $turnoEncriptado, "tieneTurno" => 1]);

                    } else {
                        return view("cliente.bienvenida", ["tieneTurno" => 0]);

                    }
            }

        } else {
            return view("prueba");
        }


    }

    public function misdatos()
    {

        $ciudades = Ciudad::all();

        return view('comunes.perfil', ["ciudades" => $ciudades]);

    }

    public function mivehiculo()
    {
        $usuarioActual = Auth::user();

        $tipos_vehiculos = DB::table("tipos_vehiculos")->get();


            case 3:
                return view("jefetaller.bienvenida");
            case 4:

        $vehiculos = Vehiculo::where("id_cliente", $usuarioActual->id)->get();


        return view('cliente.vehiculo', ["vehiculos" => $vehiculos, "tipos_vehiculos" => $tipos_vehiculos]);

    }

    public function registro_clientes_ver()
    {
        $ciudades = DB::table("ciudades")->get();
        $tipos_vehiculos = DB::table("tipos_vehiculos")->get();

        return view("cliente.registro", ["ciudades" => $ciudades, "tipos_vehiculos" => $tipos_vehiculos]);
    }

    public function registro_clientes_registrar(Request $request)
    {

        $usuario = User::create($request->all());
        //encriptar contraseña al guardar usuario ya que esto permite el login
        $usuario->password = bcrypt($usuario->password);
        //cliente
        $usuario->tipo_user_id = 1;
       
        if (!is_null($request->inputOtro)) {
            $ciudadNueva = Ciudad::create(["ciudad" => $request->inputOtro]);
            $usuario->update(["id_ciudad" => $ciudadNueva->id_ciudad]);

        }

        $usuario->save();
        return view("prueba");

    }

    //funcion para enviar post a la bd
    public function actualizarMisDatos(Request $request)
    {

        $usuarioActualizar = Auth::user();
        $usuarioActualizar->update($request->all());

        if (!is_null($request->inputOtro)) {
            $ciudadNueva = Ciudad::create(["ciudad" => $request->inputOtro]);
            $usuarioActualizar->update(["id_ciudad" => $ciudadNueva->id_ciudad]);

        }

        $ciudades = Ciudad::all();

        return Redirect::back()->withErrors(['Datos actualizados correctamente']);

    }

    public function bajaVehiculo(Request $request)
    {

        $vehiculoACancelar = Vehiculo::find($request->id_vehiculo);
        $vehiculoACancelar->cancelado = 1;
        $vehiculoACancelar->save();

        return Redirect::back()->withErrors(['Vehiculo dado de baja correctamente']);

    }

    public function altaVehiculo(Request $request)
    {

        $vehiculoACancelar = Vehiculo::find($request->id_vehiculo);
        $vehiculoACancelar->cancelado = 0;
        $vehiculoACancelar->save();

        return Redirect::back()->withErrors(['Vehiculo dado de alta correctamente']);

    }

    public function agregarVehiculo(Request $request)
    {

        $vehiculo = Vehiculo::create($request->all());
        $vehiculo->id_cliente = Auth::user()->id;
        $vehiculo->save();
        $usuarioActual = Auth::user();

        $tipos_vehiculos = DB::table("tipos_vehiculos")->get();

        $vehiculos = Vehiculo::where("id_cliente", $usuarioActual->id)->get();

        $fecha_actual = Carbon::now();
        $año = $fecha_actual->year;
        $mes = $fecha_actual->month;
        if ($mes < 10) {

            $mes = "0" . $mes;

        }
        $dia = $fecha_actual->day;
        $fecha_a_buscar = $año . "-" . $mes . "-" . $dia;
        $user = Auth::user();
        //return view("cliente.bienvenida");
        $turno = Turno::where("id_estado_turno", 2)
            ->where("fecha", '>', $fecha_a_buscar)
            ->where("id_cliente", Auth::user()->id)
            ->orderBy('fecha', 'asc')
            ->first();

        if ($turno) {
            $turnoEncriptado = Crypt::encryptString($turno->id_turno);

            return view("cliente.bienvenida", ["turno" => $turno, "turnoEncriptado" => $turnoEncriptado, "tieneTurno" => 1]);

        } else {
            return view("cliente.bienvenida", ["tieneTurno" => 0]);

        }

    }

    public function manejarHome()
    {

        $user = Auth::user();

        return view("prueba2");
    }

}
