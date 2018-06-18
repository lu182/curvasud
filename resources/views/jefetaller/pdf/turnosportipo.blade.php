<style>

        table, th, td {
            border: 1px solid black;
         }
</style>
<h2>Turnos por Tipo de Servicio </h2>

        @foreach ($tipos as $key => $tipo)
@if($tipo->tiposervicio_turno->count() > 0)
        <h2> Tipo de Servicio: {{$tipo->tipoServicio}} </h2>

             <table class="table display" id="tabla" cellspacing="5" >
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col" style="text-align:center">Fecha del Turno</th>
                            <th scope="col" style="text-align:center">Marca del Vehículo</th>
                            <th scope="col" style="text-align:center">Patente del Vehículo</th>
                            <th scope="col" style="text-align:center">N° de Chasis del Vehículo</th>

                          </tr>
                        </thead>
                        <tbody>
                  
                       
                     
                      
                   
            @foreach ($tipo->tiposervicio_turno as  $turno)
                <tr>
                    <th scope="row" style="text-align:center">{{$turno->corregirFecha()}} </th>
                    <th scope="row" style="text-align:center">{{$turno->vehiculo['marca']}} </th>
                    <th scope="row" style="text-align:center">{{$turno->vehiculo['patente']}} </th>
                    <th scope="row" style="text-align:center">{{$turno->vehiculo['nro_chasis']}} </th>
                </tr>
  

            @endforeach
        </tbody>
    </table>
    @endif
        @endforeach

            
