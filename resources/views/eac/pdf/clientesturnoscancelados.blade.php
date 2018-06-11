
<h2>Clientes con turnos cancelados</h2>

        @foreach ($clientesConTurnosCancelados as $cliente)

        @if ($cliente->turnos_cancelados->count() > 0)
        <h2> Cliente {{$cliente->nombre}} {{$cliente->apellido}} </h2>


     



                <table class="table display" id="tabla" border="1" cellspacing="1">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col" style="text-align:center">Fecha del Turno</th>
                            <th scope="col" style="text-align:center">Hora</th>
                          </tr>
                        </thead>
                        <tbody>
                  
                       
                     
                      
                   
            @foreach ($cliente->turnos_cancelados as $turnoCancelado)



            <tr>
                    <th scope="row" style="text-align:center">{{$turnoCancelado->corregirFecha()}} </th>
                    <td style="text-align:center">{{$turnoCancelado->hora}}</td>
           
                  </tr>
          



            @endforeach
        </tbody>
    </table>

    @endif
        @endforeach

            
