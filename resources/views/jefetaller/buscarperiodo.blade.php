@extends('comunes.headerdashboard')


@section("content")
<h2>BUSCAR ÓRDENES POR PERÍODO DE TIEMPO</h2>
@if($errors->any())

<div class="alert alert-danger">{{$errors->first()}}</div>

@endif
        <div id="contenedorForm">
                <form action="" method="post" >
                @csrf
                    <br>
                    <br>
                    <br>
                    
                        <label>Desde:</label> <input type="date" name="desde"  required />
                        <label>Hasta:</label> <input type="date" name="hasta"  required />

                         <input type="submit" class="btn btn-primary" style="margin-left:18px" name="btnConsultarChasis" value="CONSULTAR" id=""/> 
                    
                </form>
            </div>

            
@endsection