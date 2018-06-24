@extends('comunes.headerdashboard')


@section("content")

<h3>ORDENES ENCONTRADAS EN EL PERIODO DESDE {{$desde}} HASTA {{$hasta}}</h3>
<form action="{{route('jefetaller/periodoPDF')}}" target="_blank" method="POST"> 
    @csrf
    <input type="hidden" name="desde" value="{{$desde}}" >
    <input type="hidden" name="hasta" value="{{$hasta}}" >

<input type="submit" class="btn btn-primary"  target="_blank" value="IMPRIMIR"> 
    
   
</form>
@if ($ordenes->count() > 0)
<h3> Se encontraron {{$ordenes->count()}} órdenes </h3>


<table class="table display" id="tabla">

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




@endsection