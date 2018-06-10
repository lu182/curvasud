@extends('newHome.layout')

@section("content")
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container" style="margin-top:5%">
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-12" style="margin-top:20%">
                <h6>Bienvenido a CurvaSud</h6>
                <span class="bar"></span>
                <h1 class="text-white">
                    Gestiona Fácilmente  el <br>
                    mantenimiento de tu Vehículo
                </h1>
                <h3 class="text-white">
                    Registrate y solicitá un turno online
                </h3>
                <br>
                <a href="{{ route('registro_clientes') }}" class="genric-btn">Comenzar Ahora</a>
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
                <h6 class="text-uppercase">Ocúpate de lo que te importa</h6>
                <h1>
                    Un sistema pensado <br>
                    para su comodidad
                </h1>

                <p>
                    A través del sistema de gestión de CurvaSud, podrás realizar un registro y
                    seguimiento de todas las tareas de mantenimiento de tu vehículo, para que puedas ocuparte de lo que te importa.
                </p>
                <a class="primary-btn" href="#">Conoce más sobre nosotros</a>
            </div>
            <div class="col-lg-6 justify-content-center align-items-center d-flex">
                <img class="img-fluid mx-auto" src="{{asset('img/tacografo.jpg')}}" alt=""></a>
            </div>
        </div>
    </div>

</section>
    <!-- Start feature Area -->
    <section class="feature-area relative pt-100 pb-20">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center" style="color:white!important">
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#"><h4 class="text-white">Rápido</h4></a>
                        <p>
                            Desarrollamos nuestro sistema centrado en tu comodidad.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#"><h4 class="text-white">Trayectoria</h4></a>
                        <p>
                            Nuestra Empresa cuenta con más de 20 años de trayectoria en el mercado.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#"><h4 class="text-white">Flexibilidad</h4></a>
                        <p>
                          Podrás dar de baja tus turnos fácilmente ante cualquier inconveniente.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#"><h4 class="text-white">Enfocado en tu seguridad</h4></a>
                        <p>
                           El sistema de gestión está pensado para proteger todos tus datos, siguiendo estándares de seguridad informática.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#"><h4 class="text-white">Recomendado por nuestros clientes.</h4></a>
                        <p>
                           8 de cada 10 clientes nos recomiendan.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#"><h4 class="text-white">Práctico</h4></a>
                        <p>
                            Fácil de usar
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

    <!-- Start gallery Area -->
    <section class="gallery-area">
        <div class="container-fluid">
            <div class="row no-padding">
                <div class="active-gallery">
                    <div class="item single-gallery">
                        <div class="thumb">
                            <img src="{{asset('img/header1.jpg')}}" alt="">
                            <div class="align-items-center justify-content-center d-flex">
                            </div>
                        </div>
                    </div>
                    <div class="item single-gallery">
                        <div class="thumb">
                            <img src="{{asset('img/header7.jpg')}}" alt="">
                            <div class="align-items-center justify-content-center d-flex">
                            </div>
                        </div>
                    </div>
                    <div class="item single-gallery">
                        <div class="thumb">
                            <img src="{{asset('img/header3.jpg')}}" alt="">
                            <div class="align-items-center justify-content-center d-flex">
                            </div>
                        </div>
                    </div>
                    <div class="item single-gallery">
                        <div class="thumb">
                            <img src="{{asset('img/header4.jpg')}}" alt="">
                            <div class="align-items-center justify-content-center d-flex">
                            </div>
                        </div>
                    </div>
                    <div class="item single-gallery">
                        <div class="thumb">
                            <img src="{{asset('img/header5.jpg')}}" alt="">
                            <div class="align-items-center justify-content-center d-flex">
                            </div>
                        </div>
                    </div>
                    <div class="item single-gallery">
                        <div class="thumb">
                            <img src="{{asset('img/header6.jpg')}}" alt="">
                            <div class="align-items-center justify-content-center d-flex">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End gallery Area -->


</section>
<!-- End about-video Area -->
@endsection
