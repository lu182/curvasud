@extends('comunes.headerdashboard')


@section("content")
<h2>Turnos por Tipo de Servicio </h2>
<a class="btn btn-primary" href="{{route('/jefetaller/generarPdfTurnosPorTipoServicio')}}" target="_blank"> 
IMPRIMIR
</a>
        @foreach ($tipos as $key => $tipo)
    @if($tipo->tiposervicio_turno->count() > 0)
        <h3> Tipo de Servicio: {{$tipo->tipoServicio}} </h3>

             <table class="table display" id="tabla">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Fecha del Turno</th>
                            <th scope="col">Marca del Vehículo</th>
                            <th scope="col">Patente del Vehículo</th>
                            <th scope="col">N° de Chasis del Vehículo</th>

                          </tr>
                        </thead>
                        <tbody>
                  
                       
                     
                      
                   
            @foreach ($tipo->tiposervicio_turno as  $turno)
                <tr>
                    <th scope="row">{{$turno->corregirFecha()}} </th>
                    <th scope="row">{{$turno->vehiculo['marca']}} </th>
                    <th scope="row">{{$turno->vehiculo['patente']}} </th>
                    <th scope="row">{{$turno->vehiculo['nro_chasis']}} </th>

                </tr>
  

            @endforeach
        </tbody>
    </table>
    @endif
        @endforeach

            
@endsection