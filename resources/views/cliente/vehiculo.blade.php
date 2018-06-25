@extends('comunes.headerdashboard')


@section("content")
<!-- <link href="{{ asset('css/styleRegistro.css') }}" rel="stylesheet"> -->
<style>

    li {
        padding:5px;
        list-style-type: none;
        

    }

    .listas {
        width: 400px;
        margin-right: 500px;
        margin-left: 5px;
    }

    label {
        width: 300px
        
    }

    select {
        width: 300px;
        height: 30px;
    }

    input {
        width: 300px;
        
    }


</style>


<div class="col-md-12"  style="margin:auto;text-align:center;width:90%">
        <div class="card animated jello">
            <div class="card-header" style= "height:55px">
                <h3 class="card-title">Mis vehículos</h3>


    @if($errors->any())

    <div class="alert alert-success">{{$errors->first()}}</div>

    @endif
            </div>
        </div>

        @foreach ($vehiculos as $vehiculo)


        <div class="card">

            <div class="card-body">


                <!-- Mostramos todos los vehiculos cargados del cliente -->

            <h4>Patente del vehículo:</h4> {{$vehiculo->patente}}
            <h4>Modelo del vehículo:</h4> {{$vehiculo->modelo}}
            <h4>Chasis del vehículo:</h4> {{$vehiculo->nro_chasis}}
            <br>
            <br>

                @if ($vehiculo->cancelado == 0)
                <form method="POST" action="{{route('bajaVehiculo')}}">

                    @csrf
                    <input type="hidden" value="{{$vehiculo->id_vehiculo}}" name="id_vehiculo">


                    <input type="submit" style="cursor: pointer"  class="btn btn-danger" value="Dar de baja vehículo">
                    <br>
                    <br>

                </form>
                @else
                <form method="POST" action="{{route('altaVehiculo')}}">

                        @csrf
                        <input type="hidden" value="{{$vehiculo->id_vehiculo}}" name="id_vehiculo">


                        <input type="submit" style="cursor: pointer"  class="btn btn-primary" value="Dar de alta vehículo nuevamente">


                    </form>
                    <br>
                    
                    @endif

                    @if ($vehiculo->cancelado == 1)

                    <div class="alert alert-danger">  Este vehículo no está disponible </div>

                     @endif
            </div>
        </div>

        @endforeach
    </div>


    <div class="card">
            <div class="card-header">
                <h4 class="card-title">Dar de alta un nuevo vehículo</h4>
            </div>
            
                <div class="card-body">
                    <form method="POST" action="{{route('agregarVehiculo')}}">
                        @csrf
                    
                        <li class="listas"><label>* Tipo de vehiculo:</label>
                            <select name="id_tipo_vehiculo" id="comboTiposV" required>
                                @foreach ($tipos_vehiculos as $tipo_vehiculo)
                                <option value="{{$tipo_vehiculo->id_tipo_vehiculo}}">{{$tipo_vehiculo->tipoVehiculo}}</option>
                                @endforeach
                            </select>
                        </li>
                        <li class="listas"><label>Marca:</label> <input type="text" name="marca" value="Fiat" id="" readonly> </li>
                        <li class="listas"><label>* Modelo:</label><input type="text" name="modelo" value="" id="" required></li>
                        <li class="listas"><label>* Año:</label> <input type="number" accept="number" name="anio" value="" id="" required> </li>
                        <li class="listas"><label>* Patente:</label><input type="text" name="patente" value="" id="" minlength=7 required> </li>
                        <li class="listas"><label>* Número de Chasis:</label><input type="text" name="nro_chasis" value="" id="" minlength=7 required> </li>
                        <li class="listas"><label>* Inicio de garantía:</label> <input type="date" name="fecha_inicio_garantia" value="" id="" required></li>
                        <br>

                        <input type="submit" class="btn btn-primary" style="cursor:pointer"name="btnRegistrarse" value="REGISTRAR VEHICULO" id="registrarse"/>
                
                    </form>
                </div>
            
   </div>

    @endsection
