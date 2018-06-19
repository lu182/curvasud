@extends('comunes.headerdashboard')

<style>

        .btn{ 
            width: 200px!important;
            height: 30px!important;
            font-size: 12px!importat;
            margin: auto!important;
            margin-right: 10px!important;
            padding:3px!important

        }
        buttton{
            margin-top:0px!important;
            font-size: 12px!importat;
padding:3px!important
        }

        
</style>

@section("content")
<div class="col-md-12">
      
    @if($errors->any())

    <div class="alert alert-success">{{$errors->first()}}</div>

@endif

    
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title">Listado de Órdenes</h4>

            </div>
@if($ordenes->count()<1)

<div class="card-body " style="padding:2%">
    No hay ninguna orden registrada
</div>
@endif
            @foreach ($ordenes as $key => $orden)
            <div class="card-body table-full-width table-responsive" style="padding:2%">
                <h3>  {{$key}}</h3>
                <table class="table table-hover table-striped" id="tablaSinBuscar">
                    <thead>
                        <tr>
                            <th>N° de órden  </th>
                            <th>Fecha de Ingreso</th>
                            <th>Fecha de Egreso</th>
                            <th>Mecánico</th>
                            <th>Modelo</th>
                            <th>Chasis</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orden as $ordenIndividual)
                        <tr>
                                <td>{{$ordenIndividual->id_orden_reparacion}}</td>
                                <td>{{$ordenIndividual->corregirFecha1()}}</td>
                                <td>{{$ordenIndividual->corregirFecha2()}}</td>
                                <td>{{$ordenIndividual->orden_mecanico->nombre}} {{$ordenIndividual->orden_mecanico->apellido}}</td>
                                <td>{{$ordenIndividual->orden_vehiculo->modelo}}</td>
                                <td>{{$ordenIndividual->orden_vehiculo->nro_chasis}}</td>


                            </tr>
                        @endforeach
                     

                    </tbody>
                </table>
            </div>
            @endforeach
        </div>
 
    </div>
                



    
    @endsection









