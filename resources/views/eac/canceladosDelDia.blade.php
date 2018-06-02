
@extends('comunes.headerdashboard')


@section("content")

<h2>TURNOS CANCELADO DEL DÍA</h2>

<h3> Cantidad de turnos {{$turnosCancelados->count()}}<h3>

    <ul> 
@foreach($turnosCancelados as $turnoCancelado)

    <li>Fecha: {{$turnoCancelado->fecha}} </li>

@endforeach
    </ul>
@endsection