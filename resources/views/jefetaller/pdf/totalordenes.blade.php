<style>

        table, th, td {
            border: 1px solid black;
         }
    </style>
    <h2>Total de órdenes registradas</h2>
    <table>
    <thead class="thead-dark">
        <tr>
        <th scope="col" style="text-align:center">N° órden</th> 
          <th scope="col" style="text-align:center">Fecha Ingreso</th>
          <th scope="col" style="text-align:center">Fecha Egreso</th>
          <th scope="col" style="text-align:center">Cliente</th>
          <th scope="col" style="text-align:center">Dni</th>
          <th scope="col" style="text-align:center">Mecánico</th>
          <th scope="col" style="text-align:center">Modelo de vehiculo</th>
          <th scope="col" style="text-align:center">Chasis</th>
    
        </tr>
      </thead>
      <tbody>
    
                 @foreach ($ordenes as $orden)
                <tr>
                    <th scope="row" style="text-align:center">{{$orden->id_orden_reparacion}} </th>
                    <th scope="row" style="text-align:center">{{$orden->corregirFecha1()}} </th>
                    <th scope="row" style="text-align:center">{{$orden->corregirFecha2()}} </th>
                    <th scope="row" style="text-align:center">{{$orden->orden_usuario->nombre}} {{$orden->orden_usuario->apellido}}</th>
                    <th scope="row" style="text-align:center">{{$orden->orden_usuario->dni}}</th>
                    <th scope="row" style="text-align:center">{{$orden->orden_mecanico->nombre}} {{$orden->orden_mecanico->apellido}}</th>
                    <th scope="row" style="text-align:center">{{$orden->orden_vehiculo->modelo}}</th> 
                    <th scope="row" style="text-align:center">{{$orden->orden_vehiculo->nro_chasis}} </th> 
    
    
                </tr>
                @endforeach
        </tbody>
    </table>
    