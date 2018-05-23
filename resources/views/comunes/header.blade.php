<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
	<title>INDEX-LANDING PAGE</title>
	<meta content="" name="keywords">
	<meta content="" name="description">
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">
	
	<!-- Bootstrap CSS-->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Font-Awesome CSS-->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	<!-- Mis CSS -->
    <link href="{{ asset('css/styleIndex.css') }}" rel="stylesheet">


</head>

<body>
	
		
	<div class="header">
        <div class="header-inner container">
			<div class="row">
				<div class="col-md-5" id="divLogo_Slogan">
				    <div class="col-md-4" id="divLogo">
						<a href="/" title="Home">
							<img id="imgLogo" src="img/logocurvasud.png">
						</a>
					</div>				  
					<div class="navbar-slogan" id="divSlogan">
						Concesionario Oficial
						<br> FIAT
					</div>
				</div>
				
				<!--header rightside-->
				<div class="col-md-7" id="div_ulUsers">
				  <!--user menu-->
				  <ul class="list-inline user-menu pull-right">
					<li class="user-register"><i class="fa fa-edit text-primary "></i> <a href="{{ route('registro_clientes') }}" class="text-uppercase">Registro clientes</a></li>
					<li class="user-login"><i class="fa fa-sign-in text-primary"></i> <a href="{{ route('usuarios.index') }}" class="text-uppercase">Login</a></li>
				  </ul>
				</div>


				
			  <!-- Collect the nav links, forms, and other content for toggling -->
			  <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navegacion" style="float: right;margin-top: 5%;">
				  <li class="active"><a href="/">Inicio <span class="sr-only">(current)</span></a></li>
				  <li><a href="{{route('nosotros')}}">Nosotros</a></li>
				  <li><a href="{{route('modelos')}}">Modelos</a></li>
				  <li><a href="#">Contacto</a></li>

				</ul>
				
			
			  </div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		  </nav>
				
				
			</div>
        </div>
	</div>
	

		
		  


<!--/fin del div header-->

<!--inicio del nav_menu-->

	

	@yield("content")

		
		

		








<!-- JavaScript Librerias -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
