@extends('comunes.headerdashboard')


@section("content")
<style>

label{
        width:200px;
}

input{
        width: 800px; 
}

#registrarOrden{
        width: 300px;
        float: right;
}

#fechaEgreso{
        width: 165px;
        padding-left: 10px;
}

#selectTipoServicio{
        width: 165px;
        padding-left: 5px;  
}

#selectMecanico{
        width: 165px;
        padding-left: 5px; 
}

li{
        list-style:none;

}
</style>

<div class="row">
        <div class="col-md-12">
        <div class="card">
                        @if($errors->any())

                        <div class="alert alert-danger">{{$errors->first()}}</div>
                    
                    @endif
        <h2> Órden de Reparación </h2>
           <form action="" method="post" >
                @csrf


       
                <div class="form-control">
                        <li><label>Fecha estimada de Egreso:</label> 
                        <input id= "fechaEgreso" type="date" name="fecha_estimada_egreso" required></li>
                        
                </div>


                <div class="form-control">
                        <li><label>Seleccione Cliente:</label> 
                        <select name="cliente" class="js-example-language" onchange="vehiculoscliente(this)" id="buscarclientes" required>
                        @foreach ($clientes as $cliente)
                            <option value="{{$cliente->id}}"> {{$cliente->nombre}}  {{$cliente->apellido}}  </option>
                        @endforeach
                        </select>
                
                </div>

                <div class="form-control seleccionVehiculo">
                        <li><label>Seleccione Vehiculo:</label> 
                                <select name="vehiculo" id="vehiculos">
                                             
                                </select>
                                       
                </div>
        
                <div class="form-control">
                        <li><label>Motivo de Ingreso:</label> 
                        <input type="text" name="motivo_ingreso" required></li>
                
                </div>

                <div class="form-control">
                        <li><label>Observaciones:</label> 
                        <input type="textarea" name="observaciones" required></li>
                
                </div>

                <div class="form-control">
                        <li><label>Operación Realizada:</label> 
                        <input type="textarea" name="operacion_realizada" required></li>
                
                </div>

                <div class="form-control">
                        <li><label>Extra:</label> 
                        <input type="textarea" name="extra"></li>
                
                </div>

                <div class="form-control">
                        <li><label>Kilometraje:</label> 
                        <input type="number" name="km" required></li>
                
                </div>

                
                <div class="form-control">
                        <li><label>Seleccione tipo de servicio:</label> 
                        <select name="id_tipo_servicio" id="selectTipoServicio" required>
                            @foreach ($tipos_servicio as $tipo)
                            <option value="{{$tipo->id_tipo_servicio}}">{{$tipo->tipoServicio}}</option>
                            @endforeach
                        </select>
                </div>

                <div class="form-control">
                        <li><label>Seleccione mecánico:</label> 
                        <select name="id_mecanico" id="selectMecanico" required>
                        @foreach($mecanicos as $mecanico)
                         <option value="{{$mecanico->id_mecanico}}">{{$mecanico->nombre}} {{$mecanico->apellido}}</option>
                         @endforeach
                        </select>
                </div>
                <br>
                <input class="btn btn-primary" type="submit"  value="Registrar órden" id="registrarOrden"/> 
        
        </div>
        </div>
        </div>




@endsection