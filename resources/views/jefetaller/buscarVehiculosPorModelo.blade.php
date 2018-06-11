@extends('comunes.headerdashboard')


@section("content")
<h3>VEHICULOS SEGÚN MODELO</h3>

        <div id="contenedorForm">
                <form action="" method="post" id="formBuscarPorModelo">
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
                        <li> <input type="submit" name="btnConsultarModelo" value="CONSULTAR" id=""/> </li>
                    </ul>
                </form>
            </div>

            
@endsection