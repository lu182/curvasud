@extends('newHome.layout')

@section("content")


<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container" style="margin-top:5%">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Contacto
                </h1>
                <p class="text-white link-nav"><a href="{{ route('inicio') }}">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Contacto</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

@if($errors->any())
                        
<h4 style="text-align: center;padding:2%">{{$errors->first()}}</h4>
@endif
<section class="contact-page-area section-gap">
    <div class="container">
        <div class="row">

                     
            <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-home"></span>
                    </div>
                    <div class="contact-details">
                        <h5>Córdoba, Argentina</h5>
                        <p>Caseros 1180</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <h5>0800 555 28782 </h5>
                        <p>Lunes a Viernes de 08:00 a 18:00</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <h5>info@curvasud.com</h5>
                        <p>Envianos un email</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="form-area "  action="{{route('mail')}}" method="post" class="contact-form text-right">
                   @csrf
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input name="nombre" placeholder="Ingrese su nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                            <input name="email" placeholder="Ingrese su Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                            <input name="asunto" placeholder="Ingrese Asunto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
                            <div class="mt-20 alert-msg" style="text-align: left;"></div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control" name="mensaje" placeholder="Mensaje" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                           
                            <input type="submit" id="enviar" name="enviar" class="primary-btn mt-20 text-white" style="float: right;" value="Enviar Mensaje" /> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End contact-page Area -->

@endsection
