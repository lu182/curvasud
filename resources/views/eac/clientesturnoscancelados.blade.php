@extends('comunes.headerdashboard')


@section("content")
<h2>Clientes con turnos cancelados</h2>

        @foreach ($clientesConTurnosCancelados as $cliente)

        @if ($cliente->turnos_cancelados->count() > 0)
        <h2> Cliente {{$cliente->nombre}} {{$cliente->apellido}} </h2>


     



                <table class="table display" id="tabla" >
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Fecha del Turno</th>
                            <th scope="col">Hora</th>
                          </tr>
                        </thead>
                        <tbody>
                  
                       
                     
                      
                   
            @foreach ($cliente->turnos_cancelados as $turnoCancelado)



            <tr>
                    <th scope="row">{{$turnoCancelado->fecha}} </th>
                    <td>{{$turnoCancelado->hora}}</td>
           
                  </tr>
          



            @endforeach
        </tbody>
    </table>

    @endif
        @endforeach

            
@endsection