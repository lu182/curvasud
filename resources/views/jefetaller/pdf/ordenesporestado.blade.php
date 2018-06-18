<style>

        table, th, td {
            border: 1px solid black;
         }
</style>

<h2>Órdenes de reparación según estado de la órden </h2>

@foreach ($ordenes as $key => $orden)
@if($orden->estados_orden->count() > 0)
    <h3> Estado: {{$orden->estadoOrden}} </h3>

         <table class="table display" id="tabla">
                    <thead class="thead-dark">
                      <tr>
                        
                            <th scope="col" style="text-align:center">N° órden</th>
                            <th scope="col" style="text-align:center">Fecha ingreso</th>
                            <th scope="col" style="text-align:center">Fecha egreso</th>
                            <th scope="col" style="text-align:center">Cliente</th>
                            <th scope="col" style="text-align:center">Dni</th>
                            <th scope="col" style="text-align:center">Mecánico</th>
                            <th scope="col" style="text-align:center">Modelo vehículo</th>
                            <th scope="col" style="text-align:center">N° chasis</th>

                      </tr>
                    </thead>
                    <tbody>
              
                   
                 
                  
               
        @foreach ($orden->estados_orden as $estado)
            <tr>
                
                    <th scope="row" style="text-align:center">{{$estado->id_orden_reparacion}}</th>
                    <td style="text-align:center">{{$estado->corregirFecha1()}}</td>
                    <td style="text-align:center">{{$estado->corregirFecha2()}}</td>
                    <td style="text-align:center">{{$estado->orden_usuario->nombre}} {{$estado->orden_usuario->apellido}}</td>
                    <td style="text-align:center">{{$estado->orden_usuario->dni}}</td>                        
                    <td style="text-align:center">{{$estado->orden_mecanico->nombre}} {{$estado->orden_mecanico->apellido}}</td>
                    <td style="text-align:center">{{$estado->orden_vehiculo->modelo}}</td>
                    <td style="text-align:center">{{$estado->orden_vehiculo->nro_chasis}}</td>

            </tr>


        @endforeach
    </tbody>
</table>
@endif
    @endforeach