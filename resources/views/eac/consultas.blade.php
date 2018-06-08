@extends('comunes.headerdashboard')


@section("content")

<h2> CONSULTAS DISPONIBLES</h2>



<div class="card"><div class="card-header"><h4 class="card-title">
    <a href="{{route('/eac/verTurnos')}}"> Ver turnos disponibles y no disponibles </a>
</h4><br></div></div>

<div class="card"><div class="card-header"><h4 class="card-title">
        <a href="{{route('/eac/turnosHoy')}}"> Ver turnos cancelados del día </a>
    </h4><br></div></div>

    <div class="card"><div class="card-header"><h4 class="card-title">
            <a href="{{route('/eac/clientesregistrados')}}"> Consultar clientes registrados </a>
        </h4><br></div></div>

        <div class="card"><div class="card-header"><h4 class="card-title">
                <a href="{{route('/eac/buscarPorChasis')}}"> Buscar clientes por número de chasis </a>
            </h4><br></div></div>

            <div class="card"><div class="card-header"><h4 class="card-title">
                    <a href="{{route('/eac/buscarPorModelo')}}"> Consultar clientes por modelo de vehículo </a>
                </h4><br></div></div>


    
                <div class="card"><div class="card-header"><h4 class="card-title">
                        <a href="{{route('/eac/clientesPorVehiculo')}}"> Consultar clientes por tipo de vehículo </a>
                    </h4><br></div></div>


                    <div class="card"><div class="card-header"><h4 class="card-title">
                            <a href="{{route('/eac/turnosCancelados')}}"> Consultar clientes con turnos cancelados </a>
                        </h4><br></div></div>

                    




@endsection