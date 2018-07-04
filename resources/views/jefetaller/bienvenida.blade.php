@extends('comunes.headerdashboard')
@section("content")
@if($errors->any())
<div class="alert alert-success">{{$errors->first()}}</div>
@endif
<div class="row">
<div class="col-md-12">
   <div class="card animated fadeInDown" style="text-align:center;background: -webkit-linear-gradient(left, rgba(63,255,10,0.74) 0%,rgba(63,255,10,0.74) 1%,rgba(255,35,35,0.72) 100%); ">
      <div class="card-header" style="text-shadow: 2px 2px 30px black;color:white;background:none">
         <h3> Hola {{Auth::user()->nombre }}</h3>
      </div>
      <div class="card-body">
         <p style="font-weight:bold;color:white"> 
            Hoy es @php 
            use Carbon\Carbon;
            setlocale(LC_TIME, 'Spanish');
            $dt = Carbon::now();
            echo $dt->formatLocalized('%A ');
            echo date("d/m/Y");   
            @endphp
         </p>
      </div>
   </div>
   <div class="col-md-12">
      <div class="card animated fadeInDown gradiente" >
         <div class="card-header" style="text-shadow: 2px 2px 30px black;color:white;background:none">
            @if ($ordenesEnProceso == 0 )
            <h3> No hay ordenes en proceso</h3>
            @else
            <h3> Actualmente hay {{$ordenesEnProceso}} ordenes en proceso</h3>
            @endif
         </div>
         <div class="card-body">
            <p style="font-weight:bold;color:white"> 
               <a class="btn btn-info btn-fill" href="{{route('/jefetaller/verOrdenes')}}"> Gestionar Órdenes </a>
            </p>
         </div>
      </div>
      <!--SE ABRE UN DIV con la clase card, animated y el nombre de la animación (opcional)
         Dentro del div card se abren div class card-header para el titulo
         y div class card-body para el cuerpo de la card-->
      <div class="card animated bounceInUp">
         <div class="card-header">
            <h3> Los turnos de hoy son</h3>
         </div>
         <div class="card-body">
            @if($turnosHoy)
            <table class="table display" id="tabla">
               <thead class="thead-dark">
                  <tr>
                     <th scope="col">Fecha del turno</th>
                     <th scope="col">Cliente</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($turnosHoy as $turno)
                  <td>{{$turno->corregirFecha()}}</td>
                  <td>{{$turno->cliente->nombre}} {{$turno->cliente->apellido}}</td>
                  @endforeach
               </tbody>
            </table>
            @else
            No hay turnos registrados en el día de hoy
            @endif
         </div>
      </div>
   </div>

<div class="row" >
   <div class="col-md-6">
        <div class="card">
           <div class="card-header" >
              <h3 style="text-align: center"> Total de turnos por tipo de servicio</h3>
           </div>
           <div style="width:100%;">
              {!! $graficoTurnosTipoServicio->render() !!}
           </div>
        </div>
     </div>
     <div class="col-md-6">
        <div class="card">
           <div class="card-header" >
              <h3 style="text-align: center"> Total de vehículos por mes</h3>
           </div>
           <div style="width:100%;">
              {!! $vehiculosMes->render() !!}
           </div>
        </div>
     </div>
</div>

@endsection