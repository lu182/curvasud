@extends('comunes.headerdashboard')


@section("content")
<h2>Total de órdenes de reparación ingresadas</h2>
<a class="btn btn-primary" href="{{route('/jefetaller/generarPDFtotalOrdenes')}}" target="_blank"> 
IMPRIMIR
</a>

<h3> Se encontraron {{$ordenes->count()}} órdenes registradas</h3>

     

            <table class="table display" id="tabla" >
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">N° órden</th>
                        <th scope="col">Fecha ingreso</th>
                        <th scope="col">Fecha egreso</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Dni cliente</th>
                        <th scope="col">Mecánico</th>
                        <th scope="col">Modelo vehículo</th>
                        <th scope="col">N° chasis</th>

                      </tr>
                    </thead>
                    <tbody>
                    @foreach($ordenes as $orden)
                    <tr>
                        <th scope="row">{{$orden->id_orden_reparacion}}</th>
                        <td>{{$orden->corregirFecha1()}}</td>
                        <td>{{$orden->corregirFecha2()}}</td>
                        <td>{{$orden->orden_usuario->nombre}} {{$orden->orden_usuario->apellido}}</td>
                        <td>{{$orden->orden_usuario->dni}}</td>                        
                        <td>{{$orden->orden_mecanico->nombre}} {{$orden->orden_mecanico->apellido}}</td>
                        <td>{{$orden->orden_vehiculo->modelo}}</td>
                        <td>{{$orden->orden_vehiculo->nro_chasis}}</td>

                    </tr>       
                    @endforeach
                    </tbody>
            </table>


            
@endsection