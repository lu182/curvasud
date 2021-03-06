<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index()
    {

        // Enn la función return view enviamos el nombre de la vista y los datos,

        $vehiculos = DB::table('vehiculos')->where("anio", 2018)->select('marca', 'modelo as holaa')->get();

        //return $vehiculos;



        //Los datos enviados a la vista van en forma de array,
        //KEY es el nombre que nosotros queramos
        //VALUE es el dato que ya definido y queremos enviar
        // [KEY => VALUE]



        if (Auth::check()) {
            return view("newHome.inicio");
        }
        else{
            return view("newHome.inicio");
        }


        return view("newHome.inicio");

    }

    public function indexPost()
    {

        $user = Auth::user();

        return view("home", ["user" => $user]);
    }
}
