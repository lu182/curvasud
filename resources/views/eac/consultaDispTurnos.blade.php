
@extends('comunes.headerdashboard')


@section("content")
<h2>TURNOS DISPONIBLES</h2>

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
@foreach($disp as $turnoDisponible)
        

                <tr>
                        <th scope="row">{{$turnoDisponible->fecha}} </th>
                        <td>{{$turnoDisponible->hora}}</td>
                        <td>{{$turnoDisponible->cliente->nombre}} {{$turnoDisponible->cliente->apellido}} </td>
                        <td>{{$turnoDisponible->tipo->tipoServicio}}  </td>
                      </tr>
              
    
    
    
       
 
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

