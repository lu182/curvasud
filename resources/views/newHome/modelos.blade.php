@extends('newHome.layout')
@section("content")
<!-- start banner Area -->
<section class="banner-area relative" id="home">
   <div class="overlay overlay-bg"></div>
   <div class="container" style="margin-top:5%">
      <div class="row d-flex align-items-center justify-content-center">
         <div class="about-content col-lg-12">
            <h1 class="text-white">
               Modelos
            </h1>
            <p class="text-white link-nav"><a href="{{ route('inicio') }}">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Modelos</a></p>
         </div>
      </div>
   </div>
</section>
<!-- End banner Area -->
<!-- Start service-page Area -->
<section class="service-page-area section-gap">
   <div class="container">
      <div class="row d-flex justify-content-center">
         <div class="col-md-9 pb-40 header-text text-center">
            <h1 class="pb-10">Conocé algunos de los vehículos que ofrecemos en Curvasud</h1>
            <p>
               El mejor precio y financiación.
            </p>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <div class="single-service-page">
               <div class="thumbs relative">
                  <div class="overlay-bg"></div>
                  <img class="img-fluid" src="{{asset('img/modelos/1.jpg')}}" alt="">
               </div>
               <div class="details">
                  <a href="#">
                     <h4>Fiat 500</h4>
                  </a>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                     <br> <br>
                     <a href="{{route('contacto')}}"class="genric-btn primary circle arrow">Comunicate ahora<span class="lnr lnr-arrow-right"></span></a>
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-6">
            <div class="single-service-page">
               <div class="thumbs relative">
                  <div class="overlay-bg"></div>
                  <img class="img-fluid" src="{{asset('img/modelos/2.jpg')}}" alt="">
               </div>
               <div class="details">
                  <a href="#">
                     <h4>Fiat 500 Abarth</h4>
                  </a>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                     <br> <br>
                     <a href="{{route('contacto')}}" class="genric-btn primary circle arrow">Comunicate ahora<span class="lnr lnr-arrow-right"></span></a>
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-6">
            <div class="single-service-page">
               <div class="thumbs relative">
                  <div class="overlay-bg"></div>
                  <img class="img-fluid" src="{{asset('img/modelos/3.jpg')}}" alt="">
               </div>
               <div class="details">
                  <a href="#">
                     <h4>Fiat 500X</h4>
                  </a>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                     <br> <br>
                     <a href="{{route('contacto')}}" class="genric-btn primary circle arrow">Comunicate ahora<span class="lnr lnr-arrow-right"></span></a>
               </div>
            </div>
         </div>


         <div class="col-lg-4 col-md-6">
            <div class="single-service-page">
               <div class="thumbs relative">
                  <div class="overlay-bg"></div>
                  <img class="img-fluid" src="{{asset('img/modelos/4.jpg')}}" alt="">
               </div>
               <div class="details">
                  <a href="#">
                     <h4>Fiat ARGO </h4>
                  </a>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                     <br> <br>
                     <a href="{{route('contacto')}}" class="genric-btn primary circle arrow">Comunicate ahora<span class="lnr lnr-arrow-right"></span></a>
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-6">
            <div class="single-service-page">
               <div class="thumbs relative">
                  <div class="overlay-bg"></div>
                  <img class="img-fluid" src="{{asset('img/modelos/5.jpg')}}" alt="">
               </div>
               <div class="details">
                  <a href="#">
                     <h4>Fiat CRONOS </h4>
                  </a>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                     <br> <br>
                     <a href="{{route('contacto')}}" class="genric-btn primary circle arrow">Comunicate ahora<span class="lnr lnr-arrow-right"></span></a>
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-6">
            <div class="single-service-page">
               <div class="thumbs relative">
                  <div class="overlay-bg"></div>
                  <img class="img-fluid" src="{{asset('img/modelos/6.jpg')}}" alt="">
               </div>
               <div class="details">
                  <a href="#">
                     <h4>Fiat DOBLO CARGO </h4>
                  </a>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                     <br> <br>
                     <a href="{{route('contacto')}}" class="genric-btn primary circle arrow">Comunicate ahora<span class="lnr lnr-arrow-right"></span></a>
               </div>
            </div>
         </div>


   </div>
</section>
<!-- End service-page Area -->
@endsection
