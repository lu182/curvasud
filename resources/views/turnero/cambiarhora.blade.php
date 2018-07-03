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

<h3 style="text-align:center"> Turnos disponibles para el @php echo date("d-m-Y", strtotime($fecha)); @endphp </h3>

<h4 style="margin-left:18px"> Referencias </h4>
    
    <div class="container">
      

                    <div class="alert alert-success" id="disponible">Disponible</div>


                        <div class="alert alert-danger" id="ocupado">Ocupado</div>



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
                                <input type="" class="alert alert-danger" disabled value="{{$hora['hora']}}"  name="hora" style="cursor:pointer;width:80%;margin:auto;text-align:center"/> 
                                @endif
                                @if ($hora["estado"] == 1)
                                <input type="submit" class="alert alert-success" value="{{$hora['hora']}}"  name="hora" style="cursor:pointer;width:80%;margin:auto;text-align:center"/> 
                                @endif
                                </div>
                                @endforeach

    </div>
</div>
</div>
</div>


@endsection





