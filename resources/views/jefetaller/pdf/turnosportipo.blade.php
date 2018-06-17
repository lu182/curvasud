<style>

        table, th, td {
            border: 1px solid black;
         }
</style>
<h2>Turnos en el día por Tipos de Servicio </h2>
<a class="btn btn-primary" href="{{route('/jefetaller/generarPdfTurnosPorTipoServicio')}}" target="_blank"> 
Generar Pdf
</a>
        @foreach ($tipos as $key => $tipo)
@if($tipo->tiposervicio_turno->count() > 0)
        <h2> Tipo de Servicio: {{$tipo->tipoServicio}} </h2>

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
                  
                       
                     
                      
                   
            @foreach ($tipo->tiposervicio_turno as  $turno)
                <tr>
                    <th scope="row">{{$turno->fecha}} </th>
                    <th scope="row">{{$turno->vehiculo['marca']}} </th>
                    <th scope="row">{{$turno->vehiculo['patente']}} </th>
                    <th scope="row">{{$turno->vehiculo['nro_chasis']}} </th>
                </tr>
  

            @endforeach
        </tbody>
    </table>
    @endif
        @endforeach

            
