@extends('comunes.headerdashboard')

@section("content")
@if($errors->any())

<div class="alert alert-success">{{$errors->first()}}</div>

@endif
<h2>ORDENES DE CLIENTES</h2>

<h3> Actualmente hay {{$ordenes->count()}} órdenes en proceso </h3>

<table class="table display" id="tabla">

        <thead class="thead-dark">
                <tr>
                    <th scope="col" style="text-align:center">N° de Órden</th>
                    <th scope="col" style="text-align:center">Fecha de Ingreso</th>
                    <th scope="col" style="text-align:center">Fecha de Egreso</th>
                    <th scope="col" style="text-align:center">Mecánico</th>        
                    <th scope="col" style="text-align:center">Modelo</th>
                    <th scope="col" style="text-align:center">Chasis</th>
                    <th scope="col" style="text-align:center">Cliente</th>
                    <th scope="col" style="text-align:center">Dni</th>
                    <th scope="col" style="text-align:center">Marcar como Finalizada</th>


                </tr>
        </thead>
        <tbody>
                @foreach($ordenes as $orden)
                <tr>
                        
                    <td style="text-align:center">{{$orden->id_orden_reparacion}}</td>
                    <td style="text-align:center">{{$orden->fecha_ingreso_vehiculo}}</td>
                    <td style="text-align:center">{{$orden->fecha_egreso_vehiculo}}</td>
                    <td style="text-align:center">{{$orden->orden_mecanico->nombre}} {{$orden->orden_mecanico->apellido}}</td>
                    <td style="text-align:center">{{$orden->orden_vehiculo->modelo}} </td>
                    <td style="text-align:center">{{$orden->orden_vehiculo->nro_chasis}} </td>
                    <td style="text-align:center">{{$orden->orden_usuario->nombre}} {{$orden->orden_usuario->apellido}}</td>
                    <td style="text-align:center">{{$orden->orden_usuario->dni}} </td>
                    <td style="text-align:center">
                        <form action="" method="POST">
@csrf
<input type="hidden" name="id" value="{{$orden->id_orden_reparacion}}">
<input class="btn btn-primary" type="submit" value="Marcar como Finalizada" >

                        </form>
                    </td>


                       
                </tr>
            
            @endforeach
        </tbody>
</table>   


@endsection
