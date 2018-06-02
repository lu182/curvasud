@extends('comunes.headerdashboard')


@section("content")
<h2>BUSCAR CLIENTES POR N° DE CHASIS<h2>

        <div id="contenedorForm">
                <form action="" method="post" id="formBuscarPorChasis">
                @csrf
                    <br>
                    <br>
                    <br>
                    <ul> 
                        <li><label>Número de chasis:</label> <input type="text" name="nro_chasis" placeholder="Ingrese número de chasis" id="" required /> </li>
                                       
                        <li> <input type="submit" name="btnConsultarChasis" value="CONSULTAR" id=""/> </li>
                    </ul>
                </form>
            </div>

            
@endsection