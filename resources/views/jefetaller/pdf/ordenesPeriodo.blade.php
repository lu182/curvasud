<style>

        table, th, td {
            border: 1px solid black;
         }
</style>

<h3>ORDENES ENCONTRADAS EN EL PERIODO DESDE {{$desde}} HASTA {{$hasta}}</h3>
@if ($ordenes->count() > 0)
<h4> Total de órdenes: {{$ordenes->count()}}</h4>


<table class="table display" id="tabla" cellspacing="5" >

        <thead class="thead-dark">
                <tr>
                    <th scope="col" style="text-align:center">N° de Órden</th>
                    <th scope="col" style="text-align:center">Fecha de Ingreso</th>
                    <th scope="col" style="text-align:center">Cliente</th>        
                    <th scope="col" style="text-align:center">Marca</th>
                    <th scope="col" style="text-align:center">Modelo</th> 
                    <th scope="col" style="text-align:center">Patente</th> 
                    <th scope="col" style="text-align:center">Chasis</th> 

                </tr>
        </thead>
        <tbody>
            @foreach($ordenes as $orden)
                <tr>
                        
                    <th scope="row" style="text-align:center">{{$orden->id_orden_reparacion}}</th>
                    <td style="text-align:center">{{$orden->corregirFecha1()}}</td>
                    <td style="text-align:center">{{$orden->orden_usuario->nombre}} {{$orden->orden_usuario->apellido }}</td>
                    <td style="text-align:center">{{$orden->orden_vehiculo->marca}} </td>
                    <td style="text-align:center">{{$orden->orden_vehiculo->modelo}} </td>
                    <td style="text-align:center">{{$orden->orden_vehiculo->patente}} </td>
                    <td style="text-align:center">{{$orden->orden_vehiculo->nro_chasis}} </td>

                </tr>
            
            @endforeach
        </tbody>
</table>   

@else
<h3> No se encontraron órdenes registradas </h3>
@endif

