@extends('comunes.headerdashboard')

<style>

        .btn{ 
            width: 200px!important;
            height: 30px!important;
            font-size: 12px!importat;
            margin: auto!important;
            margin-right: 10px!important;
            padding:3px!important

        }
        buttton{
            margin-top:0px!important;
            font-size: 12px!importat;
padding:3px!important
        }

        
</style>

@section("content")
<div class="col-md-12">
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif

    @if($errors->any())

    <div class="alert alert-success">{{$errors->first()}}</div>

@endif

    
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title">Listado de Turnos</h4>
                <p class="card-category">Estos son los turnos cargados en el sistema</p>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped" id="tablaSinBuscar">
                    <thead>
                        <tr>
                            <th>Fecha  </th>
                            <th>Hora</th>
                            <th>Vehiculo</th>

                            <th>Tipo</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($turnos as $turno)
                        <tr>
                                <td>{{$turno->corregirFecha()}}</td>
                                <td>{{$turno->hora}}</td>
                                <td>{{$turno->vehiculo->modelo}} - {{$turno->vehiculo->nro_chasis}}</td>

                                <td>{{$turno->tipo->tipoServicio}}</td>
                                <td>
                                        <!--Botón para activar modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$turno->id_turno}}" style="margin-top:0px!important">
                                          Cambiar tipo de servicio
                                        </button>
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$turno->id_turno}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Seleccione el tipo de servicio</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <form method="POST" action="{{ route('cambiar_tipo_servicio') }}">
                                                  
                                                    @csrf
                                              <div class="modal-body">
                                            
                                                            <input type="hidden" name="id_turno" value="{{$turno->encriptarTurno()}}">
                                                            <!-- El name define lo que enviamos a la request  -->
                                                            
                                                            <div class="form-control">
                                                                    <li><label>Seleccione tipo de servicio:</label> 
                                                                        <select name="id_tipo_servicio"  required>
                                                                                @foreach ($tipos_servicio as $tipo)
                                                                                <option value="{{$tipo->id_tipo_servicio}}">{{$tipo->tipoServicio}}</option>
                                                                                @endforeach
                                                                            </select>
                                                            </div>
                                                            
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <input  type= "submit" class="btn btn-primary" value= "Cambiar"> 
                                            </form>

                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                    <form method="POST" action="{{ route('cambiar_fecha') }}">
                                                  
                                        @csrf
                                        <input type="hidden" name="id_turno" value="{{$turno->encriptarTurno()}}">
                                        <!-- El name define lo que enviamos a la request  -->
                                      
                                        <input  type= "submit" class="btn btn-primary " value= "Cambiar Fecha"> 
                                    </form>
                                        
                                        <form method="POST" onsubmit="return confirm('¿Está seguro de cancelar el turno?');" action="{{ route('eliminarTurno') }}">
                                              
                                            @csrf
                                            <input type="hidden" name="id_turno" value="{{$turno->encriptarTurno()}}">
                                            <input type="submit" style="cursor:pointer"class="btn btn-danger" value="Cancelar">  </button>

                                        </form>

                                </td>

                            </tr>
                        @endforeach
                     

                    </tbody>
                </table>
            </div>
        </div>
    </div>
                



    
    @endsection









