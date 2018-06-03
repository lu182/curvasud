<?php

namespace App\Http\Controllers;

class JefeDeTallerController extends Controller
{


    public function bienvenida(){

        return view("jefetaller.bienvenida");
        
    }
}


//Consultar turnos disponibles y no disponibles
//Consultar turnos cancelados del día

//Consultar clientes por número de chasis 

//Consultar vehículos por modelo de vehículo
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

//Registrar mecánicos *
//Consultar mecánicos *
//Registrar órden de reparación *
//Consultar vehículos registrados *
//Consultar tipos de servicios registrados *
