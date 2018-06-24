@extends('comunes.headerdashboard')


@section("content")

<h2> REPORTES DISPONIBLES PARA EL JEFE DE TALLER</h2>

<ul>

    <li>
        <a href="{{route('/jefetaller/turnosportipovehiculo')}}">Generar un informe del total de turnos en el dia por modelo de vehiculo</a>
    </li>

    <li>
        <a href="{{route('/jefetaller/turnosPorTipoServicio')}}">Generar un informe de turnos por tipo de servicio</a>
        </li>
        
    <li>
        <a href="{{route('/jefetaller/turnosFinalDia')}}">Generar un informe del total de turnos al final del dia</a>
    </li>

    <li>
            
        <a href="{{route('/jefetaller/trabajosPorMecanicoMostrar')}}">Generar un informe del total de tabajos realizados por mecánico</a>
        </li>

        <li>
                <a href="{{route('/jefetaller/totalOrdenes')}}">Generar un informe del total de ordenes de reparacion ingresadas</a>
            </li>
            

            <li>
                    <a href="{{route('/jefetaller/ordenesPorEstado')}}">Generar un informe de ordenes de reparacion por estado de la orden</a>
                </li>
                

                <li>
                        <a href="{{route('/jefetaller/vehiculosPorTipoServicio')}}">Generar un informe de vehiculos por tipo de servicio</a>
                    </li>
                    

                    <li>
                            <a href="{{route('/jefetaller/VehiculosMes')}}">Generar un informe de la cantidad total de vehiculos ingesados en el mes</a>
                        </li>


                        <li>
                                <a href="{{route('jefetaller/vehiculosPeriodo')}}">Generar un informe de las órdenes de reparación generadas en un período determinado</a>
                            </li>
                        
    

</ul>


@endsection