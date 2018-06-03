@extends('comunes.headerdashboard')


@section("content")

<h2> CONSULTAS DISPONIBLES</h2>


<ul>
<li>
    <a href="{{route('/eac/verTurnos')}}"> Ver turnos disponibles y no disponibles </a>
</li>

<li>
        <a href="{{route('/eac/turnosHoy')}}"> Ver turnos cancelados del día </a>
    </li>

    <li>
            <a href="{{route('/eac/clientesregistrados')}}"> Consultar clientes registrados </a>
        </li>

        <li>
                <a href="{{route('/eac/buscarPorChasis')}}"> Buscar clientes por número de chasis </a>
            </li>

            <li>
                    <a href="{{route('/eac/buscarPorModelo')}}"> Consultar clientes por modelo de vehículo </a>
                </li>


    
                <li>
                        <a href="{{route('/eac/clientesPorVehiculo')}}"> Consultar clientes por tipo de vehículo </a>
                    </li>


                    <li>
                            <a href="{{route('/eac/turnosCancelados')}}"> Consultar clientes con turnos cancelados </a>
                        </li>

                    
</ul>



@endsection