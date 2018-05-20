<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Empleado;
use App\Cliente;

class ClientesEmpleadosControlador extends Controller
{


    public function __construct()
    {

  
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        return view("ingreso.login");

     

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Hola desde create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Recibimos los datos y los definimos

        $mail = $request->txtEmail;
        $pass = $request->txtContra;


        //Función de verificar usuario

        $verificarCliente = Cliente::where("pass", $pass)
        ->where("email",$mail)->first();
        if($verificarCliente === null){
            return Redirect::back()->withErrors([ 'Los datos ingresados no son validos']);
        }else{
            
            return view("cliente.bienvenida",["cliente"=>$verificarCliente]);
        }
        
        $verificarEmpleado = Empleado::where("pass", $pass)
        ->where("email",$mail)->first();
        if($verificarEmpleado === null){
            return Redirect::back()->withErrors(['Los datos ingresados no son validos']);
        }else{
            return view("empleado.bienvenida",["empleado"=>$verificarEmpleado]);
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
