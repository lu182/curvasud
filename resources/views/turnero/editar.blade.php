@extends('comunes.headerdashboard')


@section("content")

<div class="row">
<div class="col-md-12">
<div class="card">

<h2 style= "text-align:center"> CAMBIAR TURNO </h2>
   <form action="ver_fechas_disponibles" method="post" id="formRegistro">
        @csrf

        <input type="hidden" name="id_turno" value="{{$turno->encriptarTurno()}}">

        <div class="form-control">
                        <label>Seleccione Fecha del Turno:</label> 
                        <input type="text" name="fecha" value="" id="calendario" readonly required style="width:400px">
                
                </div>

 <input class= "btn btn-primary" type="submit"  value="Ver fechas disponibles" style="margin-left: 10px"/> 

</div>
</div>
</div>


@endsection





