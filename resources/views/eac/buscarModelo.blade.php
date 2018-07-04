@extends('comunes.headerdashboard')


@section("content")
<h3>CLIENTES POR MODELO DE VEHICULO</h3>

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
                        <input class= "btn btn-primary" type="submit" name="btnConsultarModelo" value="CONSULTAR" style= "margin-left: 30px"/>
                    
                </form>
            </div>

            
@endsection