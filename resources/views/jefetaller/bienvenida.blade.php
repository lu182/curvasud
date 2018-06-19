@extends('comunes.headerdashboard')


@section("content")

<h2>  PANEL JEFE DE TALLER (empleado)</h2>
@if($errors->any())

<div class="alert alert-success">{{$errors->first()}}</div>

@endif



@endsection