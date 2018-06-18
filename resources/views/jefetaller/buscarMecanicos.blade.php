@extends('comunes.headerdashboard')


@section("content")
<h3>TRABAJOS REALIZADOS POR MECÁNICO</h3>

        <div id="contenedorForm">
                <form action="" method="post" id="formBuscarPorModelo">
                @csrf
                    <br>
                    <br>
                    <br>
                     
                        <label>Seleccione Mecánico</label> 
                       
                            <select name="id_mecanico">
                                    @foreach ($mecanicos as $mecanico)
                                   <option value="{{$mecanico->id_mecanico}}"> {{$mecanico->nombre}} {{$mecanico->apellido}} </option>
                                                            @endforeach
                              
                            </select>
                        <input type="submit" name="btnConsultar" value="BUSCAR" id="" formtarget="_blank"/>
                    
                </form>
            </div>

            
@endsection