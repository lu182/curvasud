@extends('comunes.headerdashboard')


@section("content")

<h2>TURNOS CANCELADOS DEL DÍA</h2>

<h3> Se encontraron {{$turnosCancelados->count()}} turnos cancelados</h3>

     

            <table class="table display" id="tabla" >
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($turnosCancelados as $turnoCancelado)
                    <tr>
                        <th scope="row"> 
                          @php
                          echo date('d-m-Y', strtotime($turnoCancelado->fecha));
                          @endphp </th>
                          
                          <td>{{$turnoCancelado->hora}} </td>

                    </tr>       
                    @endforeach
                    </tbody>
            </table>
    

    
@endsection