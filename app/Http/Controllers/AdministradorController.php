<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdministradorController extends Controller
{
    public function escritorioAdmin()
    {
        $user = Auth::user();

        if (!empty($user)) {

            if ($user->tipo_user_id == 4) {
                return view("administrador.bienvenida");

            }

        }
        return "No tienes permiso para acceder";
    }



    public function mostrarPagina($pagina){

        switch ($pagina){
            case "crearCliente":
            $this->crearCliente();
            break;
            
            case "modificarCliente":
            $this->modificarCliente();
            break;

            case "eliminarCliente":
            $this->eliminarCliente();
            break;
            

        }
      
    }

    public function crearCliente(){
        return view("administrador.abm.cliente.alta");
    }

    public function modificarCliente(){
        return view("administrador.abm.cliente.modificacion");
    }

    public function eliminarCliente(){
        return view("assada");
    }

    public function mostrarAbm($objeto){

        switch ($objeto){
            case "cliente":
            return view("administrador.abm.cliente");
            break;

        }

    }
















}
