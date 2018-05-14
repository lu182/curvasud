<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\TipoEmpleado;

class PruebaController extends Controller
{
    public function saludar($nombre)
    {

        $empleados= Empleado::with("tipo_empleado")->get();
        return $empleados;

    }

    public function post()
    {
        return "Hola desde controlador prueba en post";
    }
}
