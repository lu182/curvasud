@extends('comunes.headerdashboard')


@section("content")

<h2>BUSCAR ORDEN DE REPARACIÓN POR N° DE CHASIS</h2>
@if($errors->any())

<div class="alert alert-danger">{{$errors->first()}}</div>

@endif
        <div id="contenedorForm">
                <form action="" method="post" id="formBuscarOrPorCliente">
                @csrf
                    <br>
                    <br>
                    <br>
                    
                        <label>Chasis </label> <input type="text" name="nro_chasis" placeholder="Ingrese n° de chasis" id="" required /> 
                                       
                        <input type="submit" class= "btn btn-primary" name="btnConsultarOrden" value="CONSULTAR" id=""/> 
                    
                </form>
            </div>

            
@endsection