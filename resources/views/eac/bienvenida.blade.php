@extends('comunes.headerdashboard')


@section("content")

<h2>  PANEL EAC (empleado)</h2>

<div class="row"> 
    <div class="col-md-9"> 
<div class="card animated fadeInDown">
<div class="card-header">
<h2> Hola {{Auth::user()->nombre }}</h2>
</div>
<div class="card-body">

    Hoy es @php 
    use Carbon\Carbon;

    setlocale(LC_TIME, 'Spanish');
    $dt = Carbon::now();
    echo $dt->formatLocalized('%A ');
    echo date("d/m/Y");   
    @endphp
    </div>


</div>

<!--
    SE ABRE UN DIV con la clase card, animated y el nombre de la animación (opcional)
    Dentro del div card se abren div class card-header para el titulo
    y div class card-body para el cuerpo de la card

-->

<div class="card animated fadeInDown">
        <div class="card-header">
        <h2> Los turnos hoy son</h2>
        </div>
        <div class="card-body">
        

            @if(count($turnosHoy) > 0)
       @foreach ($turnosHoy as $turno)

       $turno->fecha;

       @endforeach
       @else
       No hay turnos registrados hoy
       @endif

       
            </div>
        
        
        </div>
    </div>

    </div>

@endsection