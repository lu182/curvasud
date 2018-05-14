<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\TipoEmpleado;

class PruebaController extends Controller
{
    public function saludar($nombre)
    {

        $empleados= TipoEmpleado::with("empleados")->get();
        return $empleados;

    }

    public function post()
    {
        return "Hola desde controlador prueba en post";
    }
}
