<style>

    table, th, td {
        border: 1px solid black;
     }
</style>
<h2>Trabajos realizados por el mecánico {{$mecanico->nombre}} {{$mecanico->apellido}}</h2>
<table>
<thead class="thead-dark">
    <tr>
      <th scope="col">Fecha de Ingreso</th>
      <th scope="col">Fecha de Egreso </th>
      <th scope="col">Cliente </th>

    </tr>
  </thead>
  <tbody>

             @foreach ($ordenes as $orden)
            <tr>
                <th scope="row">{{$orden->fecha_ingreso_vehiculo}} </th>
                <th scope="row">{{$orden->fecha_egreso_vehiculo}} </th>
                <th scope="row">{{$orden->orden_usuario->nombre}} {{$orden->orden_usuario->apellido}}  </th>
            </tr>
            @endforeach
    </tbody>
</table>

