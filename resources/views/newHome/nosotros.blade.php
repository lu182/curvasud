@extends('newHome.layout')

@section("content")
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container" style="margin-top:5%">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                   Nosotros
                </h1>
                <p class="text-white link-nav"><a href="{{route('inicio)'}}">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Nosotros</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->


<!-- Start about-video Area -->
<section class="about-video-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 about-video-left">
                <h6 class="text-uppercase">Trayectoria que nos distingue</h6>
                <h1>
                   Más de 20 años puestos<br>
                    a su servicio
                </h1>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmo d tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmo d tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a class="primary-btn" href="#">Comience ahora</a>
            </div>
            <div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex">
                <a class="play-btn" href="https://www.youtube.com/watch?v=o3SYW4NPcRw"><img class="img-fluid mx-auto" src="https://image.flaticon.com/icons/svg/26/26025.svg" width="50"alt=""></a>
            </div>
        </div>
    </div>
</section>
<!-- End about-video Area -->


<!-- Start home-about Area -->
<section class="home-about-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 home-about-left">
                <img class="mx-auto d-block img-fluid" src="../public/img/header1.jpg" alt="">
            </div>
            <div class="col-lg-6 home-about-right">
                <h6 class="text-uppercase">Una empresa centrada en el valor agregado</h6>
                <h1>La solución para el  <br>
                    mantenimiento de tu vehículo</h1>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis.
                </p>
                <a class="primary-btn" href="#">Comienze ahora</a>
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->



@endsection
