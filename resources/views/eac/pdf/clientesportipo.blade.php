
<h2>Clientes por Tipo de Vehículo</h2>

        @foreach ($vehiculos as $tipoVehiculo)

        <h2> Tipo de Vehículo: {{$tipoVehiculo->tipoVehiculo}} </h2>

             <table class="table display" id="tabla" border="1" cellspacing="1" align="center">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col" style="text-align:center">Marca</th>
                            <th scope="col" style="text-align:center">Modelo</th>
                            <th scope="col" style="text-align:center">Titular</th>
                            <th scope="col" style="text-align:center">Dni</th>
                          </tr>
                        </thead>
                        <tbody>
                  
                       
                     
                      
                   
            @foreach ($tipoVehiculo->tipovehiculo_vehiculo as $vehiculo)
                <tr>
                    <th scope="row" style="text-align:center">{{$vehiculo->marca}} </th>
                    <td style="text-align:center">{{$vehiculo->modelo}}</td>
                    <td style="text-align:center">{{$vehiculo->vehiculo_cliente->nombre}} {{$vehiculo->vehiculo_cliente->apellido}} </td>
                    <td style="text-align:center">{{$vehiculo->vehiculo_cliente->dni}} </td>
                </tr>
          



            @endforeach
        </tbody>
    </table>
        @endforeach

