@extends('comunes.headerdashboard')


@section("content")

<h2> CONSULTAS DISPONIBLES</h2>


<ul>
<li>
    <a href="{{route('/eac/verTurnos')}}"> Ver Turnos Disponibles y No Disponibles </a>
</li>

<li>
        <a href="{{route('/eac/turnosHoy')}}"> Ver Turnos cancelados del día </a>
    </li>

    <li>
            <a href="{{route('/eac/clientesregistrados')}}"> Consultar clientes registrados </a>
        </li>

        <li>
                <a href="{{route('/eac/buscarPorChasis')}}"> Buscar clientes por chasis </a>
            </li>

            <li>
                    <a href="{{route('/eac/buscarPorModelo')}}"> Buscar vehiculos por modelo </a>
                </li>
</ul>



@endsection