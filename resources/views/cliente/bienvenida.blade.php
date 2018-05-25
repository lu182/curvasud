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

                        <h3> Tus próximos Turnos </h3>
                        <div class="container-fluid">
                                <div class="card " style="min-width: 900px">

                                <div class="row">
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
                                    <form method="POST" action="{{ route('cambiarTurno') }}">
                                                  
                                            @csrf
                                            <input type="hidden" name="id_turno" value="{{$turnoEncriptado}}">
                                            <!-- El name define lo que enviamos a la request  -->
                                            <input style="margin-top:5%" type= "date" name="fecha">
                                            
                                            <select name= "hora">
                                                <option value="08:00:00">08:00</option>
                                                <option value="09:00:00">09:00</option>
                                                <option value="10:00:00">10:00</option>
                                                <option value="11:00:00">11:00</option>
                                                <option value="12:00:00">12:00</option>
                                                <option value="13:00:00">13:00</option>
                                                <option value="14:00:00">14:00</option>
                                                <option value="15:00:00">15:00</option>
                                                <option value="16:00:00">16:00</option>
                                                <option value="17:00:00">17:00</option>
                                                <option value="18:00:00">18:00</option>
                                           </select>
                                            <input style="margin-top:5%" type= "submit" class="btn btn-primary btn-lg" value= "Cambiar"> 
                                        </form>
                                            
                                            <form method="POST" action="{{ route('eliminarTurno') }}">
                                                  
                                                @csrf
                                                <input type="hidden" name="id_turno" value="{{$turnoEncriptado}}">
                                                <input type="submit" style="margin-top:5%;width:100%;cursor:pointer"class="btn btn-danger btn-lg" value="Cancelar">  </button>

                                            </form>
                                                                               
                                </div>

    @endsection









