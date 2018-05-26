@extends('comunes.headerdashboard')


@section("content")

<div class="row">
<div class="col-md-12">
<div class="card">

<h2> Cambiar Turno </h2>
   <form action="ver_fechas_disponibles" method="post" id="formRegistro">
        @csrf

        <input type="hidden" name="id_turno" value="{{$turno->encriptarTurno()}}">


<div class="form-control">
        <li><label>Seleccione Fecha del Turno:</label> 
        <input type="date" name="fecha" value="" id="" required></li>

</div>

<li> <input type="submit"  value="Ver fechas disponibles" placeholder="" /> </li>

</div>
</div>
</div>


@endsection





