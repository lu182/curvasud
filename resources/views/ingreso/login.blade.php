<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>LOGIN</title>
	<meta content="" name="keywords">
	<meta content="" name="description">
	
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">
	
	<!-- Bootstrap CSS-->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Font-Awesome CSS-->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	<!-- Mis CSS -->
    <link href="{{ asset('css/styleLoginClientes.css') }}" rel="stylesheet">

    	<!-- Mis CSS -->
</head>

<body>

	<div class="container">

		<div id="contenedor1">
			<form action="{{ route('login') }}" method="post" id="formlogin">
            @csrf

				<img src="img/admin.png"/>
				<b> Iniciar Sesión </b>
				<h3>
				@if($errors->any())
					<h4>{{$errors->first()}}</h4>
				@endif</h3>

				<!-- <div class="form-input" id="iconoEmail"> -->
				<div id="iconoMail">
					<img id="imgMail" src="img/email.png"/>
					<input type="email" name="email" value=""  autocomplete="off" placeholder="Email" id="email" title="Incluye un signo @, por ejemplo: nombre@dominio.com" required />
				</div>
				
				<div id="iconoPass">
				
					<img id="imgPass" src="img/password.png"/>
					<input type="password" name="password" value=""  autocomplete="off" placeholder="Contraseña" id="" title="Debe contener un minimo de 8 caracteres y al menos un número y una letra" required />
				</div>
				
				<input type="submit" name="btnIngresar" value="INGRESAR" placeholder="" id="login" />
				
				<p>¿No tiene una cuenta?&nbsp &nbsp <a href="">Registrese aquí</a></p>
			
			</form>
		</div>
	</div>

<!-- JavaScript Librerias -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>



</body>
</html>