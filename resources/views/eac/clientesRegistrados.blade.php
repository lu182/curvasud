@extends('comunes.headerdashboard')


@section("content")

<h2>CLIENTES REGISTRADOS:</h2>

<h3> Cantidad de CLIENTES {{$totalClientes->count()}}<h3>

    
@foreach($totalClientes as $cliente)

<ul> 
    <li>Nombre {{$cliente->nombre}} </li>
    <li>Apellido {{$cliente->apellido}} </li>
    <li>Telefono {{$cliente->telefono}} </li>
</ul>
@endforeach
    


@endsection