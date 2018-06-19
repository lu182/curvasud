@extends('comunes.headerdashboard')


@section("content")
<h2>VEHÍCULOS SEGÚN TIPO DE SERVICIO</h2>
<a class="btn btn-primary" href="{{route('/jefetaller/generarPDFvehiculosPorTipoServicio')}}" target="_blank"> 
IMPRIMIR
</a>
        @foreach ($tipoService as $key => $tipoSer)
@if ($tipoSer->count() > 0)
        <h3> Tipo de Servicio: {{$key}} </h3>

             <table class="table display" id="tabla">
                        <thead class="thead-dark">
                          <tr>                            
                            <th scope="col">Marca</th>
                            <th scope="col">Tipo de vehículo</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Año</th>
                            <th scope="col">Patente</th>
                            <th scope="col">N° chasis</th>
                            <th scope="col">Fecha inicio garantía</th>

                          </tr>
                        </thead>
                        <tbody>
                  
                       
                   
            @foreach ($tipoSer as $key=> $vehiculoIndividual)
                <tr>
                    <th scope="row"> {{$vehiculoIndividual->vehiculo->marca}}</th>
                    <th scope="row"> {{$vehiculoIndividual->vehiculo->vehiculo_tipoVehiculo->tipoVehiculo}}</th>
                    <th scope="row"> {{$vehiculoIndividual->vehiculo->modelo}}</th>
                    <th scope="row"> {{$vehiculoIndividual->vehiculo->anio}}</th>
                    <th scope="row"> {{$vehiculoIndividual->vehiculo->patente}}</th>
                    <th scope="row"> {{$vehiculoIndividual->vehiculo->nro_chasis}}</th>
                    <th scope="row"> {{$vehiculoIndividual->vehiculo->corregirFecha()}}</th>

                </tr>
  

            @endforeach
        </tbody>
    </table>
@endif

        @endforeach

            
@endsection