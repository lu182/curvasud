@extends('comunes.headerdashboard')


@section("content")
<h2>BUSCAR ÓRDENES POR DNI</h2>
@if($errors->any())

<div class="alert alert-danger">{{$errors->first()}}</div>

@endif
        <div id="contenedorForm">
                <form action="" method="post" id="formBuscarPorChasis">
                @csrf
                    <br>
                    <br>
                    <br>
                    
                        <label>DNI:</label> <input type="text" name="dni" placeholder="Ingrese dni" id="" required />
                                       
                         <input type="submit" name="btnConsultarChasis" value="CONSULTAR" id=""/> 
                    
                </form>
            </div>

            
@endsection