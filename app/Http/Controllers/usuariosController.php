<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Vehiculo;
use DB;
use App\Turno;
use Illuminate\Support\Facades\Crypt;

class usuariosController extends Controller
{
    public function __construct()
    {
     //   $this->middleware('auth');

    }

    public function escritorio(){


        $user =  Auth::user();
        //return view("cliente.bienvenida");

        //Llama al usuario logueado y lo almacena en una variable $user

        //Comienza un switch para verificar el tipo de usuario
        //
        switch ($user->tipo_user_id) {
            case 1:
            //Verifica que el usuario tiene un tipo_user_id = 1, lo que significa que es un cliente
            //Por ello, le devuelve la vista de bienvenida para clientes

            //estado 2 de turno sabemos que es un turno ocupado, o sea que el usuario va a tenerlo
                $turno = Turno::where("id_cliente",$user->id)->where("id_estado_turno",2)->first();

                if($turno){
                    $turnoEncriptado = Crypt::encryptString($turno->id_turno);

                    return view("cliente.bienvenida",["turno"=>$turno,"turnoEncriptado"=>$turnoEncriptado,"tieneTurno"=>1]);

                }else{
                    return view("cliente.bienvenida",["tieneTurno"=>0]);

                }
            case 2:
             //Verifica que el usuario tiene un tipo_user_id = 1, lo que significa que es un cliente
            //Por ello, le devuelve la vista de bienvenida para clientes
                return "Es un tipo de usuario 2";
            case 3:
                return "Es un tipo de usuario 3";
            case 4:
            $turno = Turno::where("id_cliente",$user->id)->where("id_estado_turno",2)->first();

            if($turno){
                $turnoEncriptado = Crypt::encryptString($turno->id_turno);

                return view("cliente.bienvenida",["turno"=>$turno,"turnoEncriptado"=>$turnoEncriptado,"tieneTurno"=>1]);

            }else{
                return view("cliente.bienvenida",["tieneTurno"=>0]);

            }
        }


    }


    public function misdatos(){

        return view('comunes.perfil');

    }

    public function mivehiculo(){

        return view ('cliente.vehiculo');


    }

    public function registro_clientes_ver(){
        $ciudades = DB::table("ciudades")->get();
        $tipos_vehiculos = DB::table("tipos_vehiculos")->get();

        return view("cliente.registro",["ciudades"=>$ciudades,"tipos_vehiculos"=>$tipos_vehiculos]);
    }

    public function registro_clientes_registrar(Request $request){

       $usuario = User::create($request->all());
       //encriptar contraseña al guardar usuario ya que esto permite el login
       $usuario->password = bcrypt($usuario->password);
       //cliente
       $usuario->tipo_user_id = 1;
       $usuario->save();

       $vehiculo = Vehiculo::create($request->all());
       $vehiculo->id_cliente = $usuario->id;
       $vehiculo->save();
     //  return response(["usuario"=>$usuario,"vehiculo"=>$vehiculo]);

       return view("prueba");

    }

    
}
