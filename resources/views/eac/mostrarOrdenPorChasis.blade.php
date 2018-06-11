@extends('comunes.headerdashboard')


@section("content")
<h2>BUSCAR ORDEN DE REPARACIÓN POR N° DE CHASIS</h2>

        <div id="contenedorForm">
                <form action="" method="post" id="formBuscarOrPorCliente">
                @csrf
                    <br>
                    <br>
                    <br>
                    
                        <label>Chasis </label> <input type="text" name="nro_chasis" placeholder="Ingrese n° de chasis" id="" required /> 
                                       
                        <input type="submit" name="btnConsultarOrden" value="CONSULTAR" id=""/> 
                    
                </form>
            </div>

            
@endsection