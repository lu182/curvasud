@extends('comunes.headerdashboard')


@section("content")
<h2>Clientes por Tipo de Vehículo</h2>

        @foreach ($vehiculos as $tipoVehiculo)

        <h2> Tipo de Vehículo: {{$tipoVehiculo->tipoVehiculo}} </h2>

             <table class="table display" id="tabla" >
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Marca</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Titular</th>
                            <th scope="col">Dni</th>
                          </tr>
                        </thead>
                        <tbody>
                  
                       
                     
                      
                   
            @foreach ($tipoVehiculo->tipovehiculo_vehiculo as $vehiculo)
                <tr>
                    <th scope="row">{{$vehiculo->marca}} </th>
                    <td>{{$vehiculo->modelo}}</td>
                    <td>{{$vehiculo->vehiculo_cliente->nombre}} {{$vehiculo->vehiculo_cliente->apellido}} </td>
                    <td>{{$vehiculo->vehiculo_cliente->dni}} </td>
                </tr>
          



            @endforeach
        </tbody>
    </table>
        @endforeach

            
@endsection