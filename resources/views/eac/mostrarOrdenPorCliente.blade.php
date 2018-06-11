@extends('comunes.headerdashboard')


@section("content")
<h2>BUSCAR ORDEN DE REPARACIÓN POR CLIENTE</h2>

        <div id="contenedorForm">
                <form action="" method="post" id="formBuscarOrPorCliente">
                @csrf
                    <br>
                    <br>
                    <br>
                    
                        <label>DNI del Cliente: </label> <input type="text" name="dni" placeholder="Ingrese dni" id="" required /> 
                                       
                        <input type="submit" name="btnConsultarOrden" value="CONSULTAR" id=""/> 
                    
                </form>
            </div>

            
@endsection