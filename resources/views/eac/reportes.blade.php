@extends('comunes.headerdashboard')


@section("content")

<h2> REPORTES DISPONIBLES</h2>

<ul>

    <li>
        <a href="{{route('eac/reporteclientes')}}" target="_blank">Generar un informe del total de clientes por tipo de vehiculo</a>
    </li>

    <li>
        <a href="{{route('eac/reportecancelados')}}">Generar un informe de clientes con turnos cancelados</a>
        </li>

    <li>
        <a href="">Consultar órdenes de reparación ingresadas por cliente</a>
    </li>

    <li>
            <a href="">Consultar órdenes de reparación ingresadas por N° de chasis</a>
        </li>
    

</ul>


@endsection