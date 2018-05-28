@extends('comunes.headerdashboard')


@section("content")

<div class="row">
<div class="col-md-12">
<div class="card">

<h2> Turnos disponibles para {{$fecha}} </h2>

<h3> Referencias </h3>
    
    <div class="container">
      

                    <div class="alert alert-success">Disponible</div>


                        <div class="alert alert-danger">Ocupado</div>



                        </div>


                        <div style="text-align: center">
                        <h3> Haga clic para seleccionar el horario del Turno </h3>

                        <form action="{{ route('actualizarTurno') }}" method="post" >
                                @csrf
                                
                                <input type="hidden" value="{{$fecha}}" name="fecha">
                                <input type="hidden" name="id_turno" value="{{$turno->encriptarTurno()}}">


                                @foreach ($horas as $hora)
                                <div style="margin-top:5%">
                                @if ($hora["estado"] == 0)
                                <input type="" class="alert alert-danger" disabled value="{{$hora['hora']}}"  name="hora" style="cursor:pointer;width:80%;margin:auto"/> 
                                @endif
                                @if ($hora["estado"] == 1)
                                <input type="submit" class="alert alert-success" value="{{$hora['hora']}}"  name="hora" style="cursor:pointer;width:80%;margin:auto"/> 
                                @endif
                                </div>
                                @endforeach

    </div>
</div>
</div>
</div>


@endsection




