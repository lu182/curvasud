@extends('comunes.headerdashboard')


@section("content")
<h2>VEHÍCULOS SEGÚN TIPO DE SERVICIO</h2>
<a class="btn btn-primary" href="{{route('/jefetaller/generarPDFvehiculosPorTipoServicio')}}" target="_blank"> 
IMPRIMIR
</a>
        @foreach ($tipoService as $key => $tipoSer)
    @if($tipoSer->tipo->count() > 0)
        <h3> Tipo de Servicio: {{$tipoSer->tipoServicio}} </h3>

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
                  
                       
                     
                      
                   
            @foreach ($tipoSer->tipo as $tipoSerVehiculo)
                <tr>
                    <th scope="row"> </th>
                    <th scope="row"> </th>
                    <th scope="row"></th>
                    <th scope="row"></th>
                    <th scope="row"></th>
                    <th scope="row"></th>
                    <th scope="row"></th>

                </tr>
  

            @endforeach
        </tbody>
    </table>
    @endif
        @endforeach

            
@endsection