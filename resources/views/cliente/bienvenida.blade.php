@extends('comunes.headerdashboard')


@section("content")

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card animated zoomIn" style="text-align:center;background: -webkit-linear-gradient(left, rgba(63,255,10,0.74) 0%,rgba(63,255,10,0.74) 1%,rgba(255,35,35,0.72) 100%); ">
                                <div class="card-header " style="background:none;color:white">
                                    <h4 class="card-title" style="text-shadow: 2px 2px 30px black;color:white">Bienvenido {{ Auth::user()->nombre }} {{ Auth::user()->apellido }}</h4>
                                    <p class="card-category" style="color:white;">Gracias por elegir Curvasud</p>
                                </div>
                                <div class="card-body " style="background:none">
                                </div>
                                <div class="card-footer ">
                                  
                                </div>
                            </div>
                        </div>

                        <div style="margin:auto;text-align:center;width:90%">

                        <h3> Tu Próximo Turno </h3>
                        <div class="container-fluid">
                                <div class="card " style="min-width: 900px">
                                    <!-- <img src="{{asset('img/bannerTurnos.png')}}"> -->
                                    @if($tieneTurno == 1  )
                                <div class="row animated  bounceInRight">
                                    <div class="col-lg-4">
                                            <div class="card-header ">
                                                <h4 class="card-title">{{ $turno->corregirFecha() }}</h4>
                                                <p class="card-category">Día</p>
                                            </div>
                                         
                                        </div>

                                        <div class="col-lg-4">
                                                <div class="card-header ">
                                                    <h4 class="card-title">{{ $turno->hora }}</h4>
                                                    <p class="card-category">Hora</p>
                                                </div>
                                              
                                            </div>

                                            <div class="col-lg-4">
                                                    <div class="card-header ">
                                                        <h4 class="card-title">{{ $turno->tipo->tipoServicio }}</h4>
                                                        <p class="card-category">Tipo de Servicio</p>
                                                    </div>
                                                 
                                                </div>

                                    </div>
                                
                                                                               
                                </div>
                                @endif
                                @if ($tieneTurno == 0)
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card animated flip">
                                            <div class="card-header ">
                                                <h4 class="card-title">No tienes turnos registrados</h4>
                                            </div>
                                                
                                                  
                                        </div>
                                    </div>
                                </div>
                                @endif

    @endsection









