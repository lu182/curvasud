@extends('comunes.headerdashboard')


@section("content")

<div class="row">
<div class="col-md-12">
<div class="card">

<h2> Turnos disponibles para {{$fecha}} </h2>
<h2> Con el tipo de servicio {{$servicio->tipoServicio}} </h2>

<h3> Referencias </h3>
    
    <div class="container">
      

                    <div class="alert alert-success">Disponible</div>


                        <div class="alert alert-danger">Ocupado</div>


                            <div class="alert alert-primary">Cancelado</div>


                        </div>


                        <div style="text-align: center">
                        <h3> Haga clic para seleccionar el horario del Turno </h3>

                        <form action="{{ route('guardarTurno') }}" method="post" id="formRegistro">
                                @csrf
                                <input type="hidden" value="{{$fecha}}" name="fecha">
                                <input type="hidden" value="{{ Auth::user()->id }}" name="id_cliente">
                                <input type="hidden" value="2" name="id_estado_turno">
                                <input type="hidden" value="{{$servicio->id_tipo_servicio}}" name="id_tipo_servicio">


                                @foreach ($horas as $hora)
                                <input type="submit" class="btn btn-info btn-lg" value="{{$hora}}"  name="hora" style="cursor:pointer;width:80%;margin:auto"/> 

                                 @foreach ($horas as $hora)
                                 
                                  @endforeach

                                @endforeach

    </div>
</div>
</div>
</div>


@endsection





