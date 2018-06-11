@extends('comunes.headerdashboard')


@section("content")
<h2>TURNOS DISPONIBLES</h2>

<table class="table display" id="tabla" >

<thead class="thead-dark">
        <tr>
          <th scope="col">Fecha</th>
          <th scope="col">Hora</th>



        </tr>
        </thead>
        <tbody>
@foreach($disp as $fecha)

          @foreach($fecha['horas'] as $hora)
          @if ($hora["estado"] == 1)
                <tr>
                    <th scope="row">{{$fecha['fecha']}} </th>
                    <th scope="row">{{$hora['hora']}} </th>

                </tr>
          @endif

        @endforeach



@endforeach

</tbody>
</table>


<h2>TURNOS NO DISPONIBLES</h2>
<table class="table display" id="tabla" >

        <thead class="thead-dark">
                <tr>
                  <th scope="col">Fecha</th>
                  <th scope="col">Hora</th>
                  <th scope="col">Cliente</th>

                  <th scope="col">Tipo de Servicio</th>
                </tr>
              </thead>
              <tbody>

@foreach($noDisp as $turnoNoDisponible)

<tr>
        <th scope="row">{{$turnoNoDisponible->fecha}} </th>
        <td>{{$turnoNoDisponible->hora}}</td>
        <td>{{$turnoNoDisponible->cliente->nombre}} {{$turnoNoDisponible->cliente->apellido}} </td>
        <td>{{$turnoNoDisponible->tipo->tipoServicio}}  </td>
      </tr>


@endforeach


</tbody>
</table>
@endsection