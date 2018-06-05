@extends('comunes.headerdashboard')


@section("content")

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Bievenido {{ Auth::user()->nombre }} {{ Auth::user()->apellido }}</h4>
                                    <p class="card-category">Gracias por elegir Curvasud</p>
                                </div>
                                <div class="card-body ">
                                </div>
                                <div class="card-footer ">
                                  
                                </div>
                            </div>
                        </div>

                        <div style="margin:auto;text-align:center;width:80%">

                        <h3> Tu Próximo Turno </h3>
                        <div class="container-fluid">
                                <div class="card " style="min-width: 900px">

                                    @if($tieneTurno == 1  )
                                <div class="row animated  bounceInRight">
                                    <div class="col-lg-4">
                                            <div class="card-header ">
                                                <h4 class="card-title">{{ $turno->fecha }}</h4>
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
                                            <div class="card ">
                                                <div class="card-header ">
                                                    <h4 class="card-title">No tienes turnos registrados</h4>
                                                </div>
                                                <div class="card-body ">
                                                </div>
                                                <div class="card-footer ">
                                                  
                                                </div>
                                            </div>
                                        </div>
                                @endif

    @endsection









