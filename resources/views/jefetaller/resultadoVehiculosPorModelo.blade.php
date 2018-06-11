@extends('comunes.headerdashboard')


@section("content")
<h2>Resultados de la búsqueda:</h2>

    <h3> Se encontraron {{$nombreModeloSeleccionado->count()}} modelos de vehiculos</h3>

    <table class="table display" id="tabla">

        <thead class="thead-dark">
            <tr>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Año</th>
                <th scope="col">Patente</th>
                <th scope="col">Núm. de chasis</th>        
                <th scope="col">Fecha de inicio de garantía</th> 
                      

            </tr>
        </thead>
        <tbody>
        
        @foreach($nombreModeloSeleccionado as $modeloAMostrar)
                
        <tr> 
            <th scope="row">{{$modeloAMostrar->marca}}</th>
            <td>{{$modeloAMostrar->modelo}}</td>
            <td>{{$modeloAMostrar->anio}}</td>
            <td>{{$modeloAMostrar->patente}} </td>
            <td>{{$modeloAMostrar->nro_chasis}} </td>
            <td>{{$modeloAMostrar->corregirFecha()}} </td>
            
                        
        </tr>
                
    @endforeach
    </tbody>
</table>  

            
@endsection