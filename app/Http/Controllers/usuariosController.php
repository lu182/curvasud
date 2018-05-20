<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function escritorio(){


        $user =  Auth::user();
     
        //Llama al usuario logueado y lo almacena en una variable $user

        //Comienza un switch para verificar el tipo de usuario
        //
        switch ($user->tipo_user_id) {
            case 1:
            //Verifica que el usuario tiene un tipo_user_id = 1, lo que significa que es un cliente
            //Por ello, le devuelve la vista de bienvenida para clientes
                return view("cliente.bienvenida");
            case 2:
             //Verifica que el usuario tiene un tipo_user_id = 1, lo que significa que es un cliente
            //Por ello, le devuelve la vista de bienvenida para clientes
                return "Es un tipo de usuario 2";
            case 3:
                return "Es un tipo de usuario 3";
            
        }


    }


    public function misdatos(){

        return view('comunes.perfil');

    }

    public function mivehiculo(){

        return view ('cliente.vehiculo');


    }


    
}
