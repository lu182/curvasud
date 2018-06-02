@extends('comunes.headerdashboard')


@section("content")
<h2>BUSCAR VEHICULOS POR MODELO<h2>

        <div id="contenedorForm">
                <form action="" method="post" id="formBuscarPorChasis">
                @csrf
                    <br>
                    <br>
                    <br>
                    <ul> 
                        <li><label>Número de chasis:</label> 
                       
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