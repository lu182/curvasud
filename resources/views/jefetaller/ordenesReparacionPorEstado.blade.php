@extends('comunes.headerdashboard')


@section("content")
<h2>Órdenes de reparación según estado de la órden </h2>
<a class="btn btn-primary" href="{{route('/jefetaller/generarPDFordenesPorEstado')}}" target="_blank"> 
IMPRIMIR
</a>
        @foreach ($ordenes as $key => $orden)
    @if($orden->estados_orden->count() > 0)
        <h3> Estado: {{$orden->estadoOrden}} </h3>

             <table class="table display" id="tabla">
                        <thead class="thead-dark">
                          <tr>
                            
                                <th scope="col">N° órden</th>
                                <th scope="col">Fecha ingreso</th>
                                <th scope="col">Fecha egreso</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Dni</th>
                                <th scope="col">Mecánico</th>
                                <th scope="col">Modelo vehículo</th>
                                <th scope="col">N° chasis</th>

                          </tr>
                        </thead>
                        <tbody>
                  
                       
                     
                      
                   
            @foreach ($orden->estados_orden as $estado)
                <tr>
                    
                        <th scope="row">{{$estado->id_orden_reparacion}}</th>
                        <td>{{$estado->corregirFecha1()}}</td>
                        <td>{{$estado->corregirFecha2()}}</td>
                        <td>{{$estado->orden_usuario->nombre}} {{$estado->orden_usuario->apellido}}</td>
                        <td>{{$estado->orden_usuario->dni}}</td>                        
                        <td>{{$estado->orden_mecanico->nombre}} {{$estado->orden_mecanico->apellido}}</td>
                        <td>{{$estado->orden_vehiculo->modelo}}</td>
                        <td>{{$estado->orden_vehiculo->nro_chasis}}</td>

                </tr>
  

            @endforeach
        </tbody>
    </table>
    @endif
        @endforeach

            
@endsection