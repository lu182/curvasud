@extends('comunes.headerdashboard')


@section("content")

<style>
    
    #disponible{
        width: 250px;
        text-align: center;
    }

    #ocupado{
        width: 250px;
        text-align: center;
    }


</style>

<div class="row">
<div class="col-md-12">
<div class="card">

<h2 style="text-align: center"> Turnos disponibles para el @php echo date("d-m-Y", strtotime($fecha)); @endphp </h2>
<h3 style="margin-left:18px"> Service: {{$servicio->tipoServicio}} </h3>

<h4 style="margin-left:18px"> Referencias </h4>
    
    <div class="container">
      

                    <div style="text-align: center" class="alert alert-success" id="disponible">Disponible</div>


                        <div style="text-align: center" class="alert alert-danger" id="ocupado">Ocupado</div>



                        </div>


                        <div style="text-align: center">
                        <h3> Haga clic para seleccionar el horario del Turno </h3>

                        <form action="{{ route('guardarTurno') }}" method="post" id="formRegistro">
                                @csrf
                                <input type="hidden" value="{{$id_vehiculo}}" name="id_vehiculo">

                                <input type="hidden" value="{{$fecha}}" name="fecha">
                                <input type="hidden" value="{{ Auth::user()->id }}" name="id_cliente">
                                <input type="hidden" value="2" name="id_estado_turno">
                                <input type="hidden" value="{{$servicio->id_tipo_servicio}}" name="id_tipo_servicio">


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





