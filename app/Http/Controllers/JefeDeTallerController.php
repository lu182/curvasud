<?php

namespace App\Http\Controllers;
use App\User; 
use App\Vehiculo; 
use App\Mecanico;
use App\Ciudad;
use App\TipoDocumento;
use App\TipoVehiculo; 
use App\Turno; 
use App\OrdenReparacion;
use App\DetalleOrden;
use App\TipoServicio;
use DB; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
use Carbon\Carbon;

use PDF;

class JefeDeTallerController extends Controller
{


    public function __construct()
    {
    //    $this->middleware('jefetaller');
    }




    public function bienvenida(){

        return view("jefetaller.bienvenida");

    }

    public function mostrarFormOrden(){


        $clientes = User::where("tipo_user_id",1)->get();
        $vehiculos = Vehiculo::get();
        $tipos_servicio = TipoServicio::get();
        $mecanicos = Mecanico::get();

        return view('jefetaller.ordenreparacion',["mecanicos"=>$mecanicos,"clientes"=>$clientes, "vehiculos"=>$vehiculos,"tipos_servicio"=>$tipos_servicio]);



    }

    public function registrarOrden(Request $request){
        
        $mecanico = Mecanico::find($request->id_mecanico);
        $fecha_ingreso =  date('Y-m-d', time());
        $fecha_estimada_egreso = $request->fecha_estimada_egreso;

        $generada_por =  Auth::user()->nombre;
        $cliente = User::find($request->cliente);
        $vehiculo = Vehiculo::find($request->vehiculo);

        $motivo_ingreso = $request->motivo_ingreso;
        $operacion_realizada = $request->operacion_realizada;
        $observaciones = $request->observaciones;
        $extra = $request->extra;
        $km = $request->km;

        $orden_reparacion = OrdenReparacion::create([
            "id_estado_orden"=>2, //en proceso
            "fecha_ingreso_vehiculo"=>$fecha_ingreso,
            "fecha_egreso_vehiculo"=>$fecha_estimada_egreso,
            "id_mecanico"=>$mecanico->id_mecanico
        ]);

        $detalle_orden = DetalleOrden::create([
            "id_orden_reparacion"=>$orden_reparacion->id_orden_reparacion,
            "kilometraje"=>$km ,
            "motivo_ingreso"=>$motivo_ingreso,
            "observaciones"=>$observaciones,
            "extra"=>$extra,
            "mecanico"=>$mecanico->id_mecanico,
            "operacion_realizada"=>$operacion_realizada
        ]);


        $orden = PDF::loadView('jefetaller.pdf.ordenreparacion',

        ["fecha_ingreso"=>$fecha_ingreso,
        "fecha_estimada_egreso"=>$fecha_estimada_egreso,
        "generada_por"=>$generada_por,
        "cliente"=>$cliente,
        "vehiculo"=>$vehiculo,
        "motivo_ingreso"=>$motivo_ingreso,
        "operacion_realizada"=>$operacion_realizada,
        "observaciones"=>$observaciones,
        "extra"=>$extra,
        "km"=>$km,
        "mecanico"=>$mecanico
        ]
    );
         return $orden->download('Orden Reparación '.$cliente->nombre.' '.$cliente->apellido.'.pdf');
         return redirect()->route("home");

    }


    //Registrar mecánicos
    public function mostrarFormMecanico(){

        $ciudades = Ciudad::get();
        $tipos_documento = TipoDocumento::get();
        return view("jefetaller.registrarmecanico",["tipos_documento"=>$tipos_documento,"ciudades"=>$ciudades]);

    }

    public function registrarMecanico(Request $request){

        $mecanicoNuevo = Mecanico::create($request->all());

        if(!is_null($request->inputOtro)){
            $ciudadNueva = Ciudad::create(["ciudad"=>$request->inputOtro]);
            $mecanicoNuevo->update(["id_ciudad"=>$ciudadNueva->id_ciudad]);

        }
        return view("jefetaller.bienvenida");
    
    }


 //Funciones para devolver página de consultas y reportes
 public function mostrarPagina($pagina)
 {

     if ($pagina == "consultas") {
         return view("jefetaller.consultas");
     }
     return view("jefetaller.reportes");
 }


 //Consultar turnos disponibles y no disponibles
    public function verTurnos()
    {
        $fechas_finales = array();
        $start = Carbon::now();
        $end = Carbon::createFromFormat('Y-m-d', substr(Carbon::now()->addDays(10), 0, 10));

        $fechas = [];

        while ($start->lte($end)) {

            $fechas[] = $start->copy()->format('Y-m-d');

            $diaAgregar = $start->addDay();
        }

        foreach ($fechas as $fecha){

            $turnos_fecha = Turno::where("fecha", $fecha)->where("id_estado_turno", 2)->get();

            //Creamos un array de Fechas (Esto podría ser base de datos)
            $horas = array(
                ["hora" => "08:00:00", "estado" => 1],
                ["hora" => "09:00:00", "estado" => 1],
                ["hora" => "10:00:00", "estado" => 1],
                ["hora" => "11:00:00", "estado" => 1],
                ["hora" => "12:00:00", "estado" => 1],
                ["hora" => "13:00:00", "estado" => 1],
                ["hora" => "14:00:00", "estado" => 1],
                ["hora" => "15:00:00", "estado" => 1],
                ["hora" => "16:00:00", "estado" => 1],
                ["hora" => "17:00:00", "estado" => 1],
                ["hora" => "18:00:00", "estado" => 1],
            );
            $fechas_finales[$fecha]=['fecha'=>$fecha,"horas"=>$horas];

            //Hacemos la comparación del Array con los turnos cargados en Database,
            // y agregamos los ya tomados, junto con sus 3 horas siguientes y 2 anteriores
            foreach ($turnos_fecha as $turno) {

                //clave es = a index o indice

                $clave = array_search($turno->hora, array_column($fechas_finales[$fecha]['horas'], "hora"));

                if ($clave == 0) {

                    $fechas_finales[$fecha]['horas'][0] = ["hora" => $fechas_finales[$fecha]['horas'][0]["hora"], "estado" => 0];
                    $fechas_finales[$fecha]['horas'][1] = ["hora" => $fechas_finales[$fecha]['horas'][1]["hora"], "estado" => 0];
                    $fechas_finales[$fecha]['horas'][2] = ["hora" => $fechas_finales[$fecha]['horas'][2]["hora"], "estado" => 0];
                }

                if ($clave) {
                    //Si la clave existe, significa que encontró un turno que se corresponde a algun horario.
                    // A través de la clave, comparamos el horario del turno con el array de horas para cambiar su estado
                    $fechas_finales[$fecha]['horas'][$clave] = ["hora" => $fechas_finales[$fecha]['horas'][$clave]["hora"], "estado" => 0];

                    if (array_key_exists($clave + 1, $fechas_finales[$fecha]['horas'])) {
                    $fechas_finales[$fecha]['horas'][$clave + 1] = ["hora" => $fechas_finales[$fecha]['horas'][$clave + 1]["hora"], "estado" => 0];
                    }

                    if (array_key_exists($clave + 2, $fechas_finales[$fecha]['horas'])) {
                    $fechas_finales[$fecha]['horas'][$clave + 2] = ["hora" => $fechas_finales[$fecha]['horas'][$clave + 2]["hora"], "estado" => 0];
                    }

                    if (array_key_exists($clave + 3, $fechas_finales[$fecha]['horas'])) {
                    $fechas_finales[$fecha]['horas'][$clave + 3] = ["hora" => $fechas_finales[$fecha]['horas'][$clave + 3]["hora"], "estado" => 0];
                    }

                    if (array_key_exists($clave - 1, $fechas_finales[$fecha]['horas'])) {
                    $fechas_finales[$fecha]['horas'][$clave - 1] = ["hora" => $fechas_finales[$fecha]['horas'][$clave - 1]["hora"], "estado" => 0];
                    }

                    if (array_key_exists($clave - 2, $fechas_finales[$fecha]['horas'])) {
                    $fechas_finales[$fecha]['horas'][$clave - 2] = ["hora" => $fechas_finales[$fecha]['horas'][$clave - 2]["hora"], "estado" => 0];
                    }

                }
            }

        }

        date_default_timezone_set('America/Argentina/Buenos_Aires');

        $fechaActual = date('Y-m-d', time());

        $turnsNoDisponibles = Turno::where("id_estado_turno", 2)->where("fecha",">=",$fechaActual)->get();

        return view('jefetaller.turnosDispYnoDisp', ['disp' => $fechas_finales, 'noDisp' => $turnsNoDisponibles]);
    
    } //termina la llave de la funcion


//Consultar turnos cancelados del día
public function TurnosHoy()
    {
        
         date_default_timezone_set('America/Argentina/Buenos_Aires');

        $fechaActual = date('Y-m-d', time());

        $turnosCancelados = DB::table("turnos")
        ->where("id_estado_turno", 3)->where("fecha", $fechaActual)->get();

        return view('jefetaller.turnosCanceladosDelDia', ["turnosCancelados" => $turnosCancelados]);


    }

//Consultar clientes por número de chasis
  
  public function mostrar()
  {

      return view("jefetaller.buscarClientePorChasis"); //muestra solo el form para colocar el chasis
  }

  public function buscarClientePorChasis(Request $request)
  {

      $chasis = $request->nro_chasis;
      $vehiculo = DB::table("vehiculos")->where("nro_chasis", $chasis)
          ->join('users', 'vehiculos.id_cliente', '=', 'users.id')->first();

      return view("jefetaller.clientePorChasis", ["clienteEncontrado" => $vehiculo]); //clienteEncontrado es lo que llamas despues en la vista clientePorChasis como variable para el if

  }

//Consultar vehículos por modelo de vehículo
public function buscarModeloMostrar()
    {

        $modelos = DB::table("vehiculos")->select("modelo")->distinct()->get();
        return view("jefetaller.buscarVehiculosPorModelo", ["modelos" => $modelos]);
    }

    public function buscarModeloRecibir(Request $request)
    {
        //recibe de la request el modelo seleccionado, y busca los vehiculos que tengan ese modelo
        $nombreModeloSeleccionado = DB::table("vehiculos")->where("modelo", $request->modelo)->get();

        $nombreModeloSeleccionado = Vehiculo::where("modelo", $request->modelo)->get();

        return view("jefetaller.resultadoVehiculosPorModelo", ["nombreModeloSeleccionado" => $nombreModeloSeleccionado]);
    }





//Consultar órdenes de reparación ingresadas, por cliente.
//Consultar órdenes de reparación ingresadas, por número de chasis.



//Reporte del total de turnos en el día por modelo de vehículo
//Reporte de turnos por tipo de servicio
//Reporte del total de turnos al final del día
//Reporte del total de trabajos realizados por mecánico
//Reporte de vehículos por tipo de servicio
//Reporte del total de OR registradas
//Reporte de OR por estado de la órden
//Reporte del total de vehiculos ingresados en el mes
//Emitir órden de reparación (PDF)



//Consultar mecánicos 
public function mecanicosRegistrados()
{

    $totalMecanicos = Mecanico::all();
    
     return view("jefetaller.mecanicosRegistrados", ["totalMecanicos" => $totalMecanicos]);

}

//Consultar vehículos registrados // agregarle el tipo de vehiculo
public function vehiculosRegistrados()
{

    $totalVehiculos = Vehiculo::all();
    
     return view("jefetaller.vehiculosRegistrados", ["totalVehiculos" => $totalVehiculos]);

}


//Consultar tipos de servicios registrados 
public function serviciosRegistrados()
{

    $totalServicios = TipoServicio::all();
    
     return view("jefetaller.serviciosRegistrados", ["totalServicios" => $totalServicios]);

}




}



