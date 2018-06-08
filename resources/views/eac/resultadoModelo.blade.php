@extends('comunes.headerdashboard')


@section("content")
<h2>Resultados de la búsqueda:</h2>

    <h3> Se encontraron {{$nombreModeloSeleccionado->count()}} vehiculos</h3>

    <table class="table display" id="tabla">

        <thead class="thead-dark">
            <tr>
                <th scope="col">Marca</th>
                <th scope="col">Año</th>
                <th scope="col">Patente</th>
                <th scope="col">Núm. chasis</th>        
                <th scope="col">Inicio de garantía</th> 
                <th scope="col">Titular</th>        
                <th scope="col">Dni</th>        
                <th scope="col">Teléfono</th>        
                <th scope="col">Email</th>        

            </tr>
        </thead>
        <tbody>
        
        @foreach($nombreModeloSeleccionado as $modeloAMostrar)
                
        <tr> 
            <th scope="row">{{$modeloAMostrar->marca}}</th>
            <td>{{$modeloAMostrar->anio}}</td>
            <td>{{$modeloAMostrar->patente}} </td>
            <td>{{$modeloAMostrar->nro_chasis}} </td>
            <td>{{$modeloAMostrar->fecha_inicio_garantia}} </td>
            
            <td>{{$modeloAMostrar->vehiculo_cliente->nombre}} {{$modeloAMostrar->vehiculo_cliente->apellido}}</td>
            <td>{{$modeloAMostrar->vehiculo_cliente->dni}}</td>
            <td>{{$modeloAMostrar->vehiculo_cliente->telefono}} </td>
            <td>{{$modeloAMostrar->vehiculo_cliente->email}}  </td>
                        
        </tr>
                
    @endforeach
    </tbody>
</table>  

            
@endsection