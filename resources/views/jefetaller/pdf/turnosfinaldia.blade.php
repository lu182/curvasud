<style>

    table, th, td {
        border: 1px solid black;
     }
</style>

<h2>Turnos al final del Día</h2>

        @foreach ($turnos as $key => $turnoDia)

        <h2> Estado del turno: {{$key}} </h2>

             <table class="table display" id="tabla" cellspacing="5">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Fecha del Turno</th>
                            <th scope="col">Marca del Vehículo</th>
                            <th scope="col">Patente del Vehículo</th>
                            <th scope="col">N° de Chasis del Vehículo</th>

                          </tr>
                        </thead>
                        <tbody>
                  
                       
                     
                      
                   
            @foreach ($turnoDia as $key => $turno)
                <tr>
                    <th scope="row">{{$turno->fecha}} </th>
                    <th scope="row">{{$turno->vehiculo['marca']}} </th>
                    <th scope="row">{{$turno->vehiculo['patente']}} </th>
                    <th scope="row">{{$turno->vehiculo['nro_chasis']}} </th>

                </tr>
  

            @endforeach
        </tbody>
    </table>

        @endforeach

            
