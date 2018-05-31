<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){

        // Enn la función return view enviamos el nombre de la vista y los datos,

        
       $vehiculos = DB::table('vehiculos')->where("anio",2018)->select('marca', 'modelo as holaa')->get();


      
       return $vehiculos;
        //Los datos enviados a la vista van en forma de array, 
        //KEY es el nombre que nosotros queramos
        //VALUE es el dato que ya definido y queremos enviar
        // [KEY => VALUE]

        return view("prueba");
    }

    public function indexPost(){

        $user = Auth::user();

        return view("home",["user"=>$user]);
    }
}
