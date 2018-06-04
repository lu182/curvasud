@extends('comunes.headerdashboard')


@section("content")

<h2>CLIENTES REGISTRADOS:</h2>

<h3> Cantidad de CLIENTES: {{$totalClientes->count()}}<h3>

<table class="table display" id="tabla">

        <thead class="thead-dark">
                <tr>
                  <th scope="col">Usuario</th>
                  <th scope="col">Cliente</th>
                  <th scope="col">Fecha de nacimiento</th>
                  <th scope="col">Teléfono</th>        
                  <th scope="col">Email</th>        
                </tr>
        </thead>
        <tbody>
            @foreach($totalClientes as $cliente)
                <tr>
                        
                    <th scope="row">{{$cliente->name}}</th>
                    <td>{{$cliente->nombre}} {{$cliente->apellido}}</td>
                    <td>{{$cliente->fecha_nac}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->email}} </td>
                        
                </tr>
            
            @endforeach
        </tbody>
</table>   


@endsection