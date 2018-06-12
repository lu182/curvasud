@extends('comunes.headerdashboard')

@section("content")
<h2>Resultados de la búsqueda:</h2>

    <h3> Se encontraron {{$ordenes->count()}} órdenes de reparación</h3>
    @isset($cliente)

        <h3> Para el cliente {{$cliente->nombre}} {{$cliente->apellido}} </h3>
    @endisset

    @isset($vehiculo)

        <h3> Para el vehiculo {{$vehiculo->patente}} {{$vehiculo->nro_chasis}} </h3>
    @endisset

    
    <table class="table display" id="tabla">

        <thead class="thead-dark">
            <tr>
                <th scope="col">Número de Órden</th>
                <th scope="col">Fecha de Ingreso</th>

                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Patente</th>
                <th scope="col">Ver órden</th>        
                      

            </tr>
        </thead>
        <tbody>
        
        @foreach($ordenes as $orden)
                
        <tr> 
            <th scope="row">{{$orden->id_orden_reparacion}}</th>
            <th scope="row">{{$orden->corregirFecha1()}}</th>

            <td>{{$orden->orden_vehiculo->marca}}</td>
            <td>{{$orden->orden_vehiculo->modelo}}</td>
            <td>{{$orden->orden_vehiculo->patente}}</td>
            <td><a target="_blank" href="{{route('/jefetaller/verOrden',$orden->id_orden_reparacion)}}" class="btn btn-primary"> Ver Orden </a></td>

                        
        </tr>
                
    @endforeach
    </tbody>
</table>  

            
@endsection