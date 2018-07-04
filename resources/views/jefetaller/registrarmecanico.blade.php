@extends('comunes.headerdashboard')


@section("content")

<div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Registrar mecánico</h4>

                @if($errors->any())

                <div class="alert alert-success">{{$errors->first()}}</div>
            
            @endif

            </div>
            <div class="card-body">
                <form method="post" action ="">
                    @csrf
                    <div class="row">
                       
                        <div class="col-md-12 px-1">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="" name= "email">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="" name="nombre" >
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Apellido</label>
                                <input type="text" class="form-control" placeholder=""  name="apellido" >
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>Documento</label>
                                <input type="number" class="form-control" placeholder="" name="dni" >
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                           <label for="">Tipo de documento</label>
                           <select id="selector_ciudad" class="form-control" name="id_tipo_doc">
                                   

                                @foreach ($tipos_documento as $tipo)

                                
                                <option value="{{$tipo->id_tipo_doc}}" >{{$tipo->tipoDocumento}}</option>
                                @endforeach
                            
                            </select>
                           
                        </div> 
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>Fecha de nacimiento</label>
                                <input type="date" class="form-control" placeholder="" name="fecha_nac" >
                            </div>
                        </div>
                       
                    
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Domicilio</label>
                                <input type="text" class="form-control" name= "domicilio">
                            </div>
                        </div>
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label>Cód.Postal</label>
                                <input type="number" class="form-control" placeholder="" name= "cod_postal">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input type="text" class="form-control" placeholder="" name= "telefono">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                                <label for="">Ciudad</label>
                                 <select id="selector_ciudad2" class="form-control" name = "id_ciudad">
    
                                     @foreach ($ciudades as $ciudad)
    
                                
                                     <option value="{{$ciudad->id_ciudad}}" >{{$ciudad->ciudad}}</option>
                           
                                     @endforeach
                                 
                                 </select>
                            </div>
    
                            <div class="col-md-4 px-1">
                                    <div class="form-group" id="ciudad_input2">
                                        <label>Ingrese nombre de ciudad</label>
                                        <input type="text" class="form-control" placeholder="" name = "inputOtro" >
                                    </div>
                                </div>
                   
                    <button type="submit" class="btn btn-info btn-fill pull-right">REGISTRAR</button>
                    <p style="margin-left:200px;margin-top:15px">Todos los campos son obligatorios</p>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

    @endsection
