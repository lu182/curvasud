@extends('comunes.headerdashboard')


@section("content")

<h2>SERVICIOS REGISTRADOS:</h2>

<h3> Se encontraron {{$totalServicios->count()}} servicios </h3>

<table class="table display" id="tabla">

        <thead class="thead-dark">
                <tr>
                    <th scope="col" style="text-align:center">Servicio</th>
                     
                </tr>
        </thead>
        <tbody>
            @foreach($totalServicios as $servicio)
                <tr>
                        
                    <th scope="row" style="text-align:center">{{$servicio->tipoServicio}}</th>
                        
                </tr>
            
            @endforeach
        </tbody>
</table>   


@endsection