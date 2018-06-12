@extends('comunes.headerdashboard')


@section("content")

<h2>VEHICULOS REGISTRADOS:</h2>

<h3> Se encontraron {{$totalVehiculos->count()}} vehículos </h3>

<table class="table display" id="tabla">

        <thead class="thead-dark">
                <tr>
                    <th scope="col" style="text-align:center">Marca</th>
                    <th scope="col" style="text-align:center">Tipo de vehiculo</th>
                    <th scope="col" style="text-align:center">Modelo</th>
                    <th scope="col" style="text-align:center">Año</th>        
                    <th scope="col" style="text-align:center">Fecha de inicio de garantía</th>
                    
                </tr>
        </thead>
        <tbody>
            @foreach($totalVehiculos as $vehiculo)
                <tr>
                        
                    <th scope="row" style="text-align:center">{{$vehiculo->marca}}</th>
                    <td style="text-align:center">{{$vehiculo->vehiculo_tipoVehiculo->tipoVehiculo}}</td>
                    <td style="text-align:center">{{$vehiculo->modelo}}</td>
                    <td style="text-align:center">{{$vehiculo->anio}}</td>
                    <td style="text-align:center">{{$vehiculo->corregirFecha()}}</td>
                       
                </tr>
            
            @endforeach
        </tbody>
</table>   


@endsection