@extends('comunes.headerdashboard')


@section("content")
<div class="col-md-12">
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title">Listado de Turnos</h4>
                <p class="card-category">Estos son los turnos cargados en el sistema</p>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Fecha  </th>
                            <th>Hora</th>
                            <th>Tipo</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($turnos as $turno)
                        <tr>
                                <td>{{$turno->fecha}}</td>
                                <td>{{$turno->hora}}</td>
                                <td>{{$turno->tipo->tipoServicio}}</td>

                            </tr>
                        @endforeach
                     

                    </tbody>
                </table>
            </div>
        </div>
    </div>
                



    @endsection









