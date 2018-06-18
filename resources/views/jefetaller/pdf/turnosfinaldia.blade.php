<style>

    table, th, td {
        border: 1px solid black;
     }
</style>

<h1>Turnos al final del Día</h1>

        @foreach ($turnos as $key => $turnoDia)

        <h2> Estado del turno: {{$key}} </h2>

             <table class="table display" id="tabla" cellspacing="5">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col" style="text-align:center">Fecha del Turno</th>
                            <th scope="col" style="text-align:center">Marca del Vehículo</th>
                            <th scope="col" style="text-align:center">Patente del Vehículo</th>
                            <th scope="col" style="text-align:center">N° de Chasis del Vehículo</th>

                          </tr>
                        </thead>
                        <tbody>
                  
                       
                     
                      
                   
            @foreach ($turnoDia as $key => $turno)
                <tr>
                    <th scope="row" style="text-align:center">{{$turno->corregirFecha()}} </th>
                    <th scope="row" style="text-align:center">{{$turno->vehiculo['marca']}} </th>
                    <th scope="row" style="text-align:center">{{$turno->vehiculo['patente']}} </th>
                    <th scope="row" style="text-align:center">{{$turno->vehiculo['nro_chasis']}} </th>

                </tr>
  

            @endforeach
        </tbody>
    </table>

        @endforeach

            
