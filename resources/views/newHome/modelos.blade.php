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
                  Audaz y seductor. Podemos definir el nuevo Fiat 500 a partir de una cuidadosa reinterpretación del diseño del original Chinquechento. Contemporáneo y simple pero a su vez elegante y funcional, el nuevo Fiat 500 es el resultado de la mezcla de aspectos técnicos, culturales y creatividad plasmados en un vehículo adecuado para todos los tiempos.
                     <br> <br>
                     <a href="{{route('contacto')}}"class="genric-btn primary circle arrow">Comunicate ahora<span class="lnr lnr-arrow-right"></span></a>
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
                     <h4>Fiat CRONOS</h4>
                  </a>
                  <p>
                  El nuevo Fiat Cronos posee líneas fluidas, con proporcionalidad y armonía entre las diferentes partes de la carrocería, resaltando belleza y deportividad. Al lado de Mobi, Toro y Argo, Cronos ratifica el nuevo momento de la marca Fiat y da brillo a una categoría de vehículos que demanda espacio interior y baúl generoso. 
   
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
                  500X es el crossover que fusiona estilo y esencia. Las dos almas, una metropolitana y otra cross, se adaptan a los gustos y necesidades de todos, brindando placer de conducción, tecnología y seguridad en lo más alto del segmento, con la solidez de un vehículo confortable, con altas prestaciones y siempre conectado con el mundo.
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
                  Fiat Argo llegó para ofrecer nuevas sensaciones a la hora de conducir. Un hatch con diseño robusto y elegante, con tecnología, confort y seguridad. Un vehículo pensado para descubrir nuevos sentidos, experiencias y placeres. 
                     <br> <br>
                     <a href="{{route('contacto')}}" class="genric-btn primary circle arrow">Comunicate ahora<span class="lnr lnr-arrow-right"></span></a>
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-6">
            <div class="single-service-page">
               <div class="thumbs relative">
                  <div class="overlay-bg"></div>
                  <img class="img-fluid" src="{{asset('img/modelos/7.jpg')}}" alt="">
               </div>
               <div class="details">
                  <a href="#">
                     <h4>Fiat MOBI </h4>
                  </a>
                  <p>
                  El Fiat Mobi presenta un estilo único con una fuerte personalidad. Un vehículo ideal para el día a día en la ciudad, de dimensiones compactas pero grande en soluciones. 
                  
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
                  Ideal para profesionales del sector de transporte de mercaderías que pasan numerosas horas del día en el vehículo: en el tránsito urbano con detenciones frecuentes para carga y descarga, pero también para la distribución de media distancia.
                     <br> <br>
                     <a href="{{route('contacto')}}" class="genric-btn primary circle arrow">Comunicate ahora<span class="lnr lnr-arrow-right"></span></a>
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-6">
                  <div class="single-service-page">
                     <div class="thumbs relative">
                        <div class="overlay-bg"></div>
                        <img class="img-fluid" src="{{asset('img/modelos/8.jpg')}}" alt="">
                     </div>
                     <div class="details">
                        <a href="#">
                           <h4>Fiat TORO </h4>
                        </a>
                        <p>
                        Fiat Toro llegó para ofrecer infinitas posibilidades sobre ruedas. Una pick up con diseño robusto y elegante, con tecnología, confort y seguridad. Para uso urbano o todoterreno, con tracción 4x2 o 4x4. Un vehículo pensado para atender todos los gustos y necesidades.
                           <br> <br>
                           <a href="{{route('contacto')}}" class="genric-btn primary circle arrow">Comunicate ahora<span class="lnr lnr-arrow-right"></span></a>
                     </div>
                  </div>
               </div>

               <div class="col-lg-4 col-md-6">
                        <div class="single-service-page">
                           <div class="thumbs relative">
                              <div class="overlay-bg"></div>
                              <img class="img-fluid" src="{{asset('img/modelos/9.jpg')}}" alt="">
                           </div>
                           <div class="details">
                              <a href="#">
                                 <h4>Fiat STRADA </h4>
                              </a>
                              <p>
                              Su nuevo estilo exterior mantiene la identidad que caracteriza a la Strada a la vez que suma fortaleza y elegancia. La nueva línea de cintura más alta permite que una caja de carga de mayor capacidad volumétrica.
                                 <br> <br>
                                 <a href="{{route('contacto')}}" class="genric-btn primary circle arrow">Comunicate ahora<span class="lnr lnr-arrow-right"></span></a>
                           </div>
                        </div>
                     </div>

                     <div class="col-lg-4 col-md-6">
                              <div class="single-service-page">
                                 <div class="thumbs relative">
                                    <div class="overlay-bg"></div>
                                    <img class="img-fluid" src="{{asset('img/modelos/10.jpg')}}" alt="">
                                 </div>
                                 <div class="details">
                                    <a href="#">
                                       <h4>Fiat FIORINO </h4>
                                    </a>
                                    <p>
                                    El Fiorino creció en tamaño, logrando desde su estilo exterior un mayor "size impression", pero sin perder agilidad para moverse por los centros urbanos, su hábitat natural. Con líneas rectas y ángulos redondeados, es un equilibrio entre funcionalidad y estilo.
                                       <br> <br>
                                       <a href="{{route('contacto')}}" class="genric-btn primary circle arrow">Comunicate ahora<span class="lnr lnr-arrow-right"></span></a>
                                 </div>
                              </div>
                           </div>


   </div>
</section>
<!-- End service-page Area -->
@endsection
