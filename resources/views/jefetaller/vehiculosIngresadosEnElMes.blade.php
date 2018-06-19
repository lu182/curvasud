@extends('comunes.headerdashboard')


@section("content")
<h2>Vehículos ingresados en el mes</h2>
<a class="btn btn-primary" href="{{route('/jefetaller/generarPDFVehiculosMes')}}" target="_blank"> 
IMPRIMIR
</a>

<h3> Se encontraron {{$vehiculosDelMes->count()}} vehículos</h3>

     

            <table class="table display" id="tabla" >
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
                    @foreach($vehiculosDelMes as $turno)
                    <tr>
                        <th scope="row">{{$turno->vehiculo->marca}}</th>
                        <td>{{$turno->vehiculo->vehiculo_tipoVehiculo->tipoVehiculo}}</td>
                        <td>{{$turno->vehiculo->modelo}}</td>
                        <td>{{$turno->vehiculo->anio}}</td>
                        <td>{{$turno->vehiculo->patente}}</td>                        
                        <td>{{$turno->vehiculo->nro_chasis}}</td>
                        <td>{{$turno->vehiculo->corregirFecha()}}</td>
                        

                    </tr>       
                    @endforeach
                    </tbody>
            </table>


            
@endsection