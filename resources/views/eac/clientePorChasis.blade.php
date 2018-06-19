
@extends('comunes.headerdashboard')


@section("content")

@if(!$clienteEncontrado == null)
<h2> Cliente: {{ $clienteEncontrado->nombre}} {{ $clienteEncontrado->apellido}}
  para el chasis: {{$clienteEncontrado->nro_chasis}}</h2>

<table class="table display" id="tabla">
    <thead class="thead-dark">
        <tr>
          <th scope="col">Marca</th>
          <th scope="col">Modelo</th>
          <th scope="col">Año</th>
          <th scope="col">Patente</th>
          <th scope="col">Fecha de inicio de garantía</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <th scope="row">{{$clienteEncontrado->marca}} </th>
          <td>{{$clienteEncontrado->modelo}}</td>
          <td>{{$clienteEncontrado->anio}}</td>
          <td>{{$clienteEncontrado->patente}}</td>
          <td>{{$clienteEncontrado->corregirFecha()}}</td>
        </tr>
         
    </tbody> 
</table> 

@else
<div class="alert alert-danger"> No se encontró el vehículo </div>
@endif

@endsection