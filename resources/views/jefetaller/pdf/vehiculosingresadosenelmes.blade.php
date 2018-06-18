<style>

    table, th, td {
    border: 1px solid black;
    }
</style>
    <h2>Vehículos ingresados en el mes</h2>
    <table>
    <thead class="thead-dark">
        <tr>
        <th scope="col" style="text-align:center">Marca</th> 
          <th scope="col" style="text-align:center">Tipo de vehículo<</th>
          <th scope="col" style="text-align:center">Modelo</th>
          <th scope="col" style="text-align:center">Año</th>
          <th scope="col" style="text-align:center">Patente</th>
          <th scope="col" style="text-align:center">N° chasis</th>
          <th scope="col" style="text-align:center">Fecha inicio garantía</th>
         
    
        </tr>
      </thead>
      <tbody>
    
                 @foreach (($vehiculosDelMes as $vehiculo)
                <tr>
                    <th scope="row" style="text-align:center">{{$vehiculo->marca}} </th>
                    <th scope="row" style="text-align:center">{{$vehiculo->tipo_vehiculo->tipoVehiculo}} </th>
                    <th scope="row" style="text-align:center">{{$vehiculo->modelo}} </th>
                    <th scope="row" style="text-align:center">{{$vehiculo->anio}} </th>
                    <th scope="row" style="text-align:center">{{$vehiculo->patente}}</th>
                    <th scope="row" style="text-align:center">{{$vehiculo->nro_chasis}} </th>
                    <th scope="row" style="text-align:center">{{$vehiculo->fecha_inicio_garantia}}</th> 
                    
    
    
                </tr>
                @endforeach
        </tbody>
    </table>
    