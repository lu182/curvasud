<style>

        table, th, td {
            border: 1px solid black;
         }
</style>
<h2>Turnos en el día por Modelo de Vehículo</h2>

        @foreach ($turnosConModelo as $key => $modelo)

        <h2> Modelo: {{$key}} </h2>

             <table class="table display" id="tabla" cellspacing="5" >
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Fecha del Turno</th>
                            <th scope="col">Marca del Vehículo</th>
                            <th scope="col">Patente del Vehículo</th>
                            <th scope="col">N° de Chasis del Vehículo</th>

                          </tr>
                        </thead>
                        <tbody>
                  
                       
                     
                      
                   
            @foreach ($modelo as $key => $turno_vehiculo)
                <tr>
                    <th scope="row">{{$turno_vehiculo->fecha}} </th>
                    <th scope="row">{{$turno_vehiculo->marca}} </th>
                    <th scope="row">{{$turno_vehiculo->patente}} </th>
                    <th scope="row">{{$turno_vehiculo->nro_chasis}} </th>
                </tr>
  

            @endforeach
        </tbody>
    </table>
        @endforeach
