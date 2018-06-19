<style>

        table, th, td {
            border: 1px solid black;
         }
</style>
<h2>Vehículos registrados según tipo de servicio</h2>

            @foreach ($tipoService as $key => $tipoSer)
            @if ($tipoSer->count() > 0)
            <h2> Tipo de Servicio: {{$key}} </h2>

             <table class="table display" id="tabla" cellspacing="5" style="width: 100%;text-align:center" >
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col" style="text-align:center">Marca</th>
                            <th scope="col" style="text-align:center">Tipo de vehículo</th>
                            <th scope="col" style="text-align:center">Modelo</th>
                            <th scope="col" style="text-align:center">Año</th>
                            <th scope="col" style="text-align:center">Patente</th>
                            <th scope="col" style="text-align:center">N° chasis</th>
                            <th scope="col" style="text-align:center">Fecha inicio garantía</th>

                          </tr>
                        </thead>
                        <tbody>
                  
                       
                     
                                @foreach ($tipoSer as $key=> $vehiculoIndividual)
                                <tr>
                                    <th scope="row"> {{$vehiculoIndividual->vehiculo->marca}}</th>
                                    <th scope="row"> {{$vehiculoIndividual->vehiculo->vehiculo_tipoVehiculo->tipoVehiculo}}</th>
                                    <th scope="row"> {{$vehiculoIndividual->vehiculo->modelo}}</th>
                                    <th scope="row"> {{$vehiculoIndividual->vehiculo->anio}}</th>
                                    <th scope="row"> {{$vehiculoIndividual->vehiculo->patente}}</th>
                                    <th scope="row"> {{$vehiculoIndividual->vehiculo->nro_chasis}}</th>
                                    <th scope="row"> {{$vehiculoIndividual->vehiculo->corregirFecha()}}</th>
                
                                </tr>
                  
                
                            @endforeach
        </tbody>
    </table>
    @endif
        @endforeach

            