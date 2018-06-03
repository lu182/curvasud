<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class RegistroEmpleadoController extends Controller
{

    public function registroEmp_ver()
    {

        $user = Auth::user();
        if (Auth::check() && $user->tipo_user_id == 4) {
            return view('eac.registrar');
        } else {
            return "No tienes permiso para acceder";
        }

    }

}
