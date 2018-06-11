@extends('comunes.headerdashboard')


@section("content")

<h2>MECÁNICOS REGISTRADOS:</h2>

<h3> Se encontraron {{$totalMecanicos->count()}} mecánicos </h3>

<table class="table display" id="tabla">

        <thead class="thead-dark">
                <tr>
                    <th scope="col" style="text-align:center">Mecanico</th>
                    <th scope="col" style="text-align:center">Email</th>
                    <th scope="col" style="text-align:center">DNI</th>        
                    <th scope="col" style="text-align:center">Fecha de nacimiento</th>
                    <th scope="col" style="text-align:center">Teléfono</th> 
                </tr>
        </thead>
        <tbody>
            @foreach($totalMecanicos as $mecanico)
                <tr>
                        
                    <th scope="row" style="text-align:center">{{$mecanico->nombre}} {{$mecanico->apellido}}</th>
                    <td style="text-align:center">{{$mecanico->email}}</td>
                    <td style="text-align:center">{{$mecanico->dni}}</td>
                    <td style="text-align:center">{{$mecanico->corregirFecha()}}</td>
                    <td style="text-align:center">{{$mecanico->telefono}} </td>    
                </tr>
            
            @endforeach
        </tbody>
</table>   


@endsection