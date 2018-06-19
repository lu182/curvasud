<style>

    table, th, td {
    border: 1px solid black;
    }
</style>
    <h2>Vehículos ingresados en el mes</h2>
    <table style="width:100%;text-align:center">
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
    
            @foreach($vehiculosDelMes as $turno)
            <tr>
                <th scope="row">{{$turno->vehiculo->marca}}</th>
                <td>{{$turno->vehiculo->vehiculo_tipoVehiculo->tipoVehiculo}}</td>
                <td>{{$turno->vehiculo->modelo}}</td>
                <td>{{$turno->vehiculo->anio}}</td>
                <td>{{$turno->vehiculo->patente}}</td>                        
                <td>{{$turno->vehiculo->nro_chasis}}</td>
                <td>{{$turno->vehiculo->corregirFecha()}}</td>
                

            </tr>       
            @endforeach
        </tbody>
    </table>
    