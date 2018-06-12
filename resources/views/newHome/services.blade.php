@extends('newHome.layout')

@section("content")
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container" style="margin-top:5%">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                   Services
                </h1>
                <p class="text-white link-nav"><a href="{{ route('inicio') }}">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Servicios</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->


<!-- Start about-video Area -->
<section class="about-video-area section-gap">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 about-video-left">
                <h6 class="text-uppercase">Conocé nuestros servicios de mantenimiento</h6>
                <h1> MANTENIMIENTO PROGRAMADO </h1>

                <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Modelo</th>
                            <th scope="col">10.000 Km</th>
                            <th scope="col">20.000 Km</th>
                            <th scope="col">30.000 Km</th>
                            <th scope="col">40.000 Km</th>
                            <th scope="col">50.000 Km</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Uno - Fiorino Fire</th>
                            <td>$3063</td>
                            <td>$3686</td>
                            <td>$3241</td>
                            <td>$5491</td>
                            <td>$3063</td>
                          </tr>
                          <tr>
                            <th scope="row">Nuevo Uno - Nueva Fior XMF</th>
                            <td>$3267</td>
                            <td>$4449</td>
                            <td>$3572</td>
                            <td>$6604</td>
                            <td>$3280</td>
                          </tr>
                          <tr>
                            <th scope="row">Palio/WE/Siena/Strada/Idea/Palio 326/GSiena 1.4</th>
                            <td>$3458</td>
                            <td>$4741</td>
                            <td>$3769</td>
                            <td>$6165</td>
                            <td>$3458</td>
                          </tr>
                          <tr>
                            <th scope="row">Palio/WE/Siena/Strada/Idea/Palio 326/GSiena 1.6</th>
                            <td>$3864</td>
                            <td>$4983</td>
                            <td>$3998</td>
                            <td>$6191</td>
                            <td>$3864</td>
                            </tr>
                            <tr>
                                <th scope="row">Palio/WE/Siena/Strada/Idea 1.8</th>
                                <td>$3445</td>
                                <td>$4119</td>
                                <td>$3724</td>
                                <td>$5816</td>
                                <td>$3432</td>
                            </tr>
                            <tr>
                                <th scope="row">Punto</th>
                                <td>$3591</td>
                                <td>$4831</td>
                                <td>$3610</td>
                                <td>$6267</td>
                                <td>$3591</td>
                            </tr>  
                            <tr>
                                <th scope="row">Qubo 1.4</th>
                                <td>$3721</td>
                                <td>$4932</td>
                                <td>$4068</td>
                                <td>$6610</td>
                                <td>$3724</td>
                            </tr>    
                            <tr>
                                <th scope="row">500</th>
                                <td>$3721</td>
                                <td>$4932</td>
                                <td>$4068</td>
                                <td>$6610</td>
                                <td>$3724</td>
                            </tr>
                            <tr>
                                <th scope="row">Bravo</th>
                                <td>$3721</td>
                                <td>$4932</td>
                                <td>$4068</td>
                                <td>$6610</td>
                                <td>$3724</td>
                            </tr> 
                            <tr>
                                <th scope="row">Dobló</th>
                                <td>$3721</td>
                                <td>$4932</td>
                                <td>$4068</td>
                                <td>$6610</td>
                                <td>$3724</td>
                            </tr>
                            <tr>
                                <th scope="row">Argo</th>
                                <td>$3721</td>
                                <td>$4932</td>
                                <td>$4068</td>
                                <td>$6610</td>
                                <td>$3724</td>
                            </tr>
                            <tr>
                                <th scope="row">Toro 2.0 MJT</th>
                                <td>$3721</td>
                                <td>$4932</td>
                                <td>$4068</td>
                                <td>$6610</td>
                                <td>$3724</td>
                            </tr> 
                            <tr>
                                <th scope="row">Cronos</th>
                                <td>$3721</td>
                                <td>$4932</td>
                                <td>$4068</td>
                                <td>$6610</td>
                                <td>$3724</td>
                            </tr>                
                            <tr>
                                <th scope="row">Mobi</th>
                                <td>$3721</td>
                                <td>$4932</td>
                                <td>$4068</td>
                                <td>$6610</td>
                                <td>$3724</td>
                            </tr>  
                            <tr>
                                <th scope="row">Ducato</th>
                                <td>$3721</td>
                                <td>$4932</td>
                                <td>$4068</td>
                                <td>$6610</td>
                                <td>$3724</td>
                            </tr> 

                        </tbody>
                </table>
            </div>
        </div>//fin div row
        







    </div> //fin div container
</section>
<!-- End about-video Area -->


<!-- Start home-about Area -->
<section class="home-about-area section-gap">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-6 home-about-left">
                <img class="mx-auto d-block img-fluid" src="{{asset('img/services_2.jpg')}}" alt="">
            </div>
            
            <div class="col-lg-6 home-about-right">
                <h6 class="text-uppercase">Una empresa centrada en el valor agregado</h6>
                <h1>La solución para el  <br>
                    mantenimiento de tu vehículo</h1>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis.
                </p>
                <a class="primary-btn" href="#">Comenzá ahora</a>
            </div>
        
        </div>
    </div>
</section>
<!-- End home-about Area -->



@endsection
