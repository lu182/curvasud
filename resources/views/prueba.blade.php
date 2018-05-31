@extends('comunes.header')



@section("content")

<!-- 1. Link to jQuery (1.8 or later), -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->

<!-- fotorama.css & fotorama.js. -->
<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->



<div class="row" > 
<div class="fotorama"   data-width="100%"
>
  <img src="img/argo.jpg" >
  <img src="img/cronos.jpg" >
  <img src="img/toro.jpg">

</div>
</div>
<div>
   


</div>
<div class="jumbotron">
    <div class="container"> 
        <h1>Solicite su turno ahora</h1>
        <p>Crea una cuenta y registra tus turnos</p>
        <p><a class="btn btn-primary btn-lg" href="{{ route('turnero') }}" role="button">Registrarme</a></p>
      </div>
    </div>



@endsection
