@extends('comunes.headerdashboard')


@section("content")

<div class="row">
<div class="col-md-12">
<div class="card">

                @if($errors->any())

                <div class="alert alert-success">{{$errors->first()}}</div>
            
            @endif
<h2 style= "text-align:center"> REGISTRAR TURNO </h2>
   <form action="" method="post" id="formRegistro">
        @csrf
<div class="form-control">
        <label>Seleccione tipo de servicio:</label> 
            <select name="id_tipo_servicio"  required>
                    @foreach ($tipos_servicio as $tipo)
                    <option value="{{$tipo->id_tipo_servicio}}">{{$tipo->tipoServicio}}</option>
                    @endforeach
                </select>
</div>

<div class="form-control">
                <label>Seleccione Vehiculo:</label> 
                    <select name="id_vehiculo"  required>
                            @foreach ($vehiculos as $vehiculo)
                            <option value="{{$vehiculo->id_vehiculo}}">{{$vehiculo->modelo}} - {{$vehiculo->patente}} </option>
                            @endforeach
                        </select>
        </div>


<div class="form-control">
        <label>Seleccione Fecha del Turno:</label> 
        <input type="text" name="fecha" value="" id="calendario" readonly required style="width:400px;border: none;color: white;">

</div>

<input class= "btn btn-primary" type="submit"  value="Registrar Turno" style="margin-left:30px" id="registrarse"/> 

</div>
</div>
</div>


@endsection





