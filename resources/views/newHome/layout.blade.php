<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>CurvaSud</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{asset('newHome/css/linearicons.css')}}">
        <link rel="stylesheet" href="{{asset('newHome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('newHome/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('newHome/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('newHome/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('newHome/css/animate.min.css')}}">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="{{asset('newHome/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('newHome/css/main.css')}}">
    </head>
    <body>
          <header id="header" id="home">
            <div class="container">
                <div class="row header-top align-items-center">
                    <div class="col-lg-4 col-sm-4 menu-top-left">
                        <a href="mailto:info@curvasud.com.ar"><span class="lnr lnr-location"></span></a>
                        <a class="tel" href="mailto:info@curvasud.com.ar">info@curvasud.com.ar</a>
                    </div>
                    <div class="col-lg-4 menu-top-middle justify-content-center d-flex">
                        <a href="{{ route('inicio') }}">
                            <img class="img-fluid" src="{{asset('img/logocurvasud.png')}}" alt="" width="120">
						</a>

					</div>

                    <div class="col-lg-4 col-sm-4 menu-top-right">
                        <a class="tel" href="tel:+880 123 12 658 439">0800 555 28782 </a>
                        <a href="tel:+880 123 12 658 439"><span class="lnr lnr-phone-handset"></span></a>
                    </div>
				</div>
				<div class="col-lg-4 col-sm-2 menu-top-left">
					<p>Concesionario oficial Fiat</p>
				</div>
            </div>
                <hr>
            <div class="container">
                <div class="row align-items-center justify-content-center d-flex">
                  <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li  class="{{ Request::path() == 'inicio' ? 'menu-active' : '' }}"><a href="{{ route('inicio') }}">Inicio</a></li>
                        <li  class="{{ Request::path() == 'nosotros' ? 'menu-active' : '' }}"><a href="{{ route('nosotros') }}">Nosotros</a></li>
						<li  class="{{ Request::path() == 'modelos' ? 'menu-active' : '' }}"><a href="{{ route('modelos') }}">Modelos</a></li>
						<li  class="{{ Request::path() == 'services' ? 'menu-active' : '' }}"><a href="{{ route('services') }}">Servicios</a></li>
                      <li  class="{{ Request::path() == 'contacto' ? 'menu-active' : '' }}"><a href="{{ route('contacto') }}">Contacto</a></li>
                      @guest
                      <li><a href="{{ route('login') }}" style="    background-image: -webkit-linear-gradient(0deg, #f45622 0%, #f53e54 100%);;color:white;font-size:15px">Acceso Clientes</a></li>
                      @else
                      <li><a href="{{ route('escritorio') }}" style="    background-image: -webkit-linear-gradient(0deg, #f45622 0%, #f53e54 100%);;color:white;font-size:15px">Ir al escritorio</a></li>
                      <li><a href="{{ route('logout') }}" style="    background-image: -webkit-linear-gradient(0deg, #f45622 0%, #f53e54 100%);;color:white;font-size:15px">Cerrar Sesión</a></li>
					  <li> Bienvenido  {{Auth::user()->nombre }}   {{Auth::user()->apellido }}</li>

                      @endguest


                    </ul>
                  </nav><!--nav-menu-container -->
                </div>
            </div>
          </header><!--header -->
          <!-- Comienza Contenido -->
          @yield("content")

          <!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Sobre Nosotros</h4>
								<p>
Somos Curvasud, una concesionaria de vehículos centradas en el valor agregado a nuestros clientes.								</p>
							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Contactanos</h4>
								<p>
Esperamos tu contacto en nuestras lineas rotativas								</p>
								<p class="number">
									0800 555 28782<br>
									0800 555 28783
								</p>
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Newsletter</h4>
								<p>Suscribete a nuestro newsletter para recibir novedades y promociones.</p>
								<div class="d-flex flex-row" id="mc_embed_signup">


									  <form class="navbar-form" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									    <div class="input-group add-on align-items-center d-flex">
									      	<input class="form-control" name="EMAIL" placeholder="Email " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
											<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
									      <div class="input-group-btn">
									        <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
									      </div>
									    </div>
									      <div class="info mt-20"></div>
									  </form>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-bottom row">
						<p class="footer-text m-0 col-lg-6 col-md-12">

						</p>
						<div class="footer-social col-lg-6 col-md-12">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="{{asset('newHome/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{asset('newHome/js/vendor/bootstrap.min.js')}}"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{asset('newHome/js/easing.min.js')}}"></script>
			<script src="{{asset('newHome/js/hoverIntent.js')}}"></script>
			<script src="{{asset('newHome/js/superfish.min.js')}}"></script>
			<script src="{{asset('newHome/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('newHome/js/jquery.magnific-popup.min.js')}}"></script>
			<script src="{{asset('newHome/js/owl.carousel.min.js')}}"></script>
			<script src="{{asset('newHome/js/jquery.sticky.js')}}"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="{{asset('newHome/js/jquery.nice-select.min.js')}}"></script>
			<script src="{{asset('newHome/js/parallax.min.js')}}"></script>
			<script src="{{asset('newHome/js/waypoints.min.js')}}"></script>
			<script src="{{asset('newHome/js/jquery.counterup.min.js')}}"></script>
			<script src="{{asset('newHome/js/mail-script.js')}}"></script>
			<script src="{{asset('newHome/js/main.js')}}"></script>
		</body>
	</html>



