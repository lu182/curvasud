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


        switch ($user->tipo_user_id) {
            case 1:
                return view("cliente.bienvenida");
            case 2:
                return "Es un tipo de usuario 2";
            case 3:
                return "Es un tipo de usuario 3";
        }


    }


    
}
