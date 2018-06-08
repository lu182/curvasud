@extends('comunes.headerdashboard')


@section("content")
<h3>CLIENTES POR MODELO DE VEHICULO</h3>

        <div id="contenedorForm">
                <form action="" method="post" id="formBuscarPorChasis">
                @csrf
                    <br>
                    <br>
                    <br>
                    <ul> 
                        <li><label>Modelo de vehículo:</label> 
                       
                            <select name="modelo">
                                    @foreach ($modelos as $key => $modelo)
                                   <option value="{{$modelo->modelo}}"> {{$modelo->modelo}} </option>
                                                            @endforeach
                              
                            </select>
                        <li> <input type="submit" name="btnConsultarChasis" value="CONSULTAR" id=""/> </li>
                    </ul>
                </form>
            </div>

            
@endsection