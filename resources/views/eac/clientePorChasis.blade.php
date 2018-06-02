
@extends('comunes.headerdashboard')


@section("content")

@if(!$clienteEncontrado == null)
<h2> Cliente: {{ $clienteEncontrado->nombre}} 
    
  para el chasis: {{$clienteEncontrado->nro_chasis}}</h2>
<h2> Marca: {{ $clienteEncontrado->marca }} </h2>
<h2> Modelo: {{ $clienteEncontrado->modelo }}</h2>
<h2> Año: {{ $clienteEncontrado->anio }}</h2>
<h2> Patente: {{ $clienteEncontrado->patente }}</h2>
<h2> Fecha de inicio de garantía: {{ $clienteEncontrado->fecha_inicio_garantia}} </h2>

@else
<div class="alert alert-danger"> No se encontró el vehículo </div>
@endif

@endsection