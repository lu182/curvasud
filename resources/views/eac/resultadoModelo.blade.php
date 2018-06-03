@extends('comunes.headerdashboard')


@section("content")
<h2>Resultados de la búsqueda:</h2>

        <h3> Se encontraron {{$nombreModeloSeleccionado->count()}} vehiculos<h3>

    
                @foreach($nombreModeloSeleccionado as $modeloAMostrar)
                
                    <ul> 
                        <li>Marca: {{$modeloAMostrar->marca}} </li>
                        <li>Año: {{$modeloAMostrar->anio}} </li>
                        <li>Patente: {{$modeloAMostrar->patente}} </li>
                        <li>Chasis: {{$modeloAMostrar->nro_chasis}} </li>
                        <li>Fecha inicio de garantía: {{$modeloAMostrar->fecha_inicio_garantia}} </li>
                        <br>
                        <li>Titular: {{$modeloAMostrar->vehiculo_cliente->nombre}} </li>
                        <li>DNI:  {{$modeloAMostrar->vehiculo_cliente->dni}}</li>
                        <li>Teléfono: {{$modeloAMostrar->vehiculo_cliente->telefono}} </li>
                        <li>Email: {{$modeloAMostrar->vehiculo_cliente->email}}  </li>
                        
                        <p>------------------------------------------------------------------------ </p>
                    </ul>
                
              @endforeach  

            
@endsection