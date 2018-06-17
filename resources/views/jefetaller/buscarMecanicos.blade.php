@extends('comunes.headerdashboard')


@section("content")
<h3>ÓRDENES POR MECÁNICO</h3>

        <div id="contenedorForm">
                <form action="" method="post" id="formBuscarPorModelo">
                @csrf
                    <br>
                    <br>
                    <br>
                    <ul> 
                        <li><label>Seleccione Mecánico</label> 
                       
                            <select name="id_mecanico">
                                    @foreach ($mecanicos as $mecanico)
                                   <option value="{{$mecanico->id_mecanico}}"> {{$mecanico->nombre}} {{$mecanico->apellido}} </option>
                                                            @endforeach
                              
                            </select>
                        <li> <input type="submit" name="btnConsultarModelo" value="BUSCAR" id=""/> </li>
                    </ul>
                </form>
            </div>

            
@endsection