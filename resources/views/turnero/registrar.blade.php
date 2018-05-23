@extends('comunes.headerdashboard')


@section("content")

<div class="row">
<div class="col-md-12">
<div class="card">

<h2> Registrar Turno </h2>
   <form action="" method="post" id="formRegistro">
        @csrf
<div class="form-control">
        <li><label>Seleccione tipo de servicio:</label> 
            <select name="id_tipo_servicio"  required>
                    @foreach ($tipos_servicio as $tipo)
                    <option value="{{$tipo->id_tipo_servicio}}">{{$tipo->tipoServicio}}</option>
                    @endforeach
                </select>
</div>


<div class="form-control">
        <li><label>Seleccione Fecha del Turno:</label> 
        <input type="date" name="fecha" value="" id="" required></li>

</div>

<li> <input type="submit"  value="Registrar Turno" placeholder="" id="registrarse"/> </li>

</div>
</div>
</div>


@endsection





