@extends('comunes.headerdashboard')


@section("content")


<h3> Está por marcar la órden n° {{$orden->id_orden_reparacion}} como finalizada</h3>

Si lo desea, puede también actualizar la fecha de egreso del vehículo.

<form action="{{route('jefetaller/actualizarOrden')}}" method="POST">
    @csrf

    <input type="hidden" value="{{$orden->id_orden_reparacion}}" name="id">
<div class="form-control">
        <li><label>Seleccione nueva fecha de egreso de vehículo (opcional):</label> 
        <input type="text" name="fecha" value="{{$orden->fecha_egreso_vehiculo}}" id="calendario" readonly required style="width:400px;border: none;color: white;"></li>

</div>

<input type="submit" value="Actualizar" class="btn btn-primary"> 
</form>



@endsection