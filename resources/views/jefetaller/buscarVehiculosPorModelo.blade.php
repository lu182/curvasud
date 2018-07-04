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
                        <label>Modelo de vehículo:</label> 
                       
                            <select name="modelo">
                                    @foreach ($modelos as $key => $modelo)
                                   <option value="{{$modelo->modelo}}"> {{$modelo->modelo}} </option>
                                                            @endforeach
                              
                            </select>
                        <input type="submit" class="btn btn-primary" name="btnConsultarModelo" value="CONSULTAR" style="margin-left:20px"/> 
                    </ul>
                </form>
            </div>

            
@endsection