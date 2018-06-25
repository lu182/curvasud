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
                <p class="text-white link-nav"><a href="{{ route('inicio') }}">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Nosotros</a></p>
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
                    a tu servicio
                </h1>

                <p>
                    CurvaSud es una empresa dedicada a la venta y comercialización de vehículos teniendo como eje principal de su operatoria la atención y el servicio al cliente. Con más de 20 años de experiencia en este rubro, CurvaSud ofrece el respaldo y confianza que toda persona necesita al momento de adquirir un vehículo.
                </p>
                <p>
                    En la actualidad, es uno de los más importantes concesionarios de las redes oficiales Fiat, y cuenta con toda la línea de automóviles, pick ups y utilitarios. También comercializa, en forma oficial.
                </p>
                <p>
                    La empresa se encuentra emplazada en la ciudad de Córdoba, con dirección en Caseros 1180, desarrollando sus actividades en un predio de más de 9.300 m2.
                </p>
                
            </div>
            <div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex" style= "height: 415px;">
                <p>
                    Cuenta con una importante estructura edilicia, con cómodas y funcionales instalaciones para el mejor desenvolvimiento de los clientes; haciendo de la estadía en la concesionaria un momento sumamente agradable. Cada uno de los modelos de la marca que la empresa comercializa, se encuentran en un espacio único y especialmente diseñado, como así también el sector destinado a servicio mecánico.
                </p>
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
                <img class="mx-auto d-block img-fluid" src="{{asset('img/empresa.jpg')}}" alt="">
                <br>
                <br>
                <img class="mx-auto d-block img-fluid" src="{{asset('img/diagnostico.jpg')}}" alt="">
            </div>
            
           
            <div class="col-lg-6 home-about-right">
                <h6 class="text-uppercase">Una empresa centrada en el valor agregado</h6>
                <h1>Un poco de historia</h1>

                <p>
                        En un principio la empresa se dedicaba exclusivamente a Ia comercialización de vehículos para el transporte de carga y el agro, en Córdoba y zonas de influencia.
                        <br>
                        <br>
                        Hoy, luego de enfrentar con éxito y solvencia diferentes desafíos en pos de crecer y desarrollarse, brinda la posibilidad de adquirir una amplia gama de vehículos Fiat.
                        <br>
                        <br>
                        En estos años la empresa progresó a través de la ejecución de proyectos puntuales y concretos, tanto en la ampliación de la oferta vehicular y de servicios al cliente, como en lo que hace a la infraestructura edilicia y de personal.
                        <br>
                        <br>
                        La apertura de salones de exposición, sectores de servicio y capacitación constante de todo el personal, son la prueba de la adaptación a los nuevos tiempos. CURVASUD se ha modernizado para satisfacer al máximo todos los requerimientos de quienes la eligen a diario.
                </p>
                <!-- <a class="primary-btn" href="{{ route('registro_clientes') }}">Comenzá ahora</a> -->
                
            </div>
            
            
        </div>
    </div>
</section>
<!-- End home-about Area -->



@endsection
