
@extends('comunes.headerdashboard')


@section("content")
<h2>TURNOS DISPONIBLES</h2>
@foreach($disp as $turnoDisponible)

    <p>Fecha: {{$turnoDisponible->fecha}} </p>

@endforeach


<h2>TURNOS NO DISPONIBLES</h2>
@foreach($noDisp as $turnoNoDisponible)

    <p>Fecha: {{$turnoNoDisponible->fecha}} </p>

@endforeach

@endsection