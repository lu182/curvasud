<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>REGISTRO CLIENTES</title>
    <meta content="" name="keywords">
    <meta content="" name="description">
        
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">
        
    <!-- Bootstrap CSS-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Font-Awesome CSS-->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        
    <!-- Mis CSS -->
    <link href="{{ asset('css/styleRegistro.css') }}" rel="stylesheet">
        
    
</head>

<body>
    <div id="contenedorForm">
        <form action="" method="post" id="formRegistro">
        @csrf
            <img src="img/registro.png"/>
            <b> REGISTRO DE CLIENTES </b>
            @csrf
            <br>
            <br>
            <p>Los campos indicados con * son obligatorios</p>
            <br>
            
            <ul> 
                <li><label>* Nombre de usuario:</label> <input type="text" name="name" placeholder="Ingrese un nombre de usuario" id="" required /> </li>
                <li><label>* Email:</label> <input type="email" name="email" value="" placeholder="Ingrese su correo electrónico" id="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3}$" title="Incluye un signo @, por ejemplo: nombre@dominio.com" required /> </li>
                <li><label>* Contraseña:</label> <input type="password" name="password" value="" placeholder="Ingrese una contraseña" id="" pattern="(?=.*\d)(?=.*[a-z]).{8,}" title="Debe contener un minimo de 8 caracteres y al menos un número y una letra" required /> </li>
                <li><label>* Tipo de documento:</label>
                    <select name="id_tipo_doc" id="comboDni" required>
                        <option value="1" selected>DNI</option>
                        <option value="2">Pasaporte</option>
                        <option value="3">LE</option>				
                    </select>
                </li>
                <li><label>* Dni:</label> <input type="number" name="dni" accept="number" value="" id="" maxlength="8" required> </li>
                <li><label>* Ciudad/Localidad:</label>
                    <select name="id_ciudad" id="comboCiudades" required>
                        @foreach ($ciudades as $ciudad)
                        <option value="{{$ciudad->id_ciudad}}">{{$ciudad->ciudad}}</option>
                        @endforeach
                    </select> 
                </li>
                <li><label>* Nombre:</label> <input type="text" name="nombre" value="" id="" required> </li>
                <li><label>* Apellido:</label> <input type="text" name="apellido" value="" id="" required> </li>
                <li><label>Fecha de nacimiento:</label> <input type="date" name="fecha_nac" value="" id=""></li>
                <li><label>Razón social:</label> <input type="text" name="razon_social" value="" id="">  </li>
                <li> <label>Domicilio:</label> <input type="text" name="domicilio" value="" id=""> </li>
                <li><label>Cód. Postal:</label> <input type="number" accept="number" name="cod_postal" value="" id=""> </li>
                <li><label>* Teléfono:</label> <input type="text" name="telefono" value="" id="" required> </li>
                <br>
                <b> DATOS DEL VEHÍCULO</b>
                <br>
                <br>
                <br>
                <li><label>* Tipo de vehiculo:</label>
                    <select name="id_tipo_vehiculo" id="comboTiposV" required>
                        @foreach ($tipos_vehiculos as $tipo_vehiculo)
                        <option value="{{$tipo_vehiculo->id_tipo_vehiculo}}">{{$tipo_vehiculo->tipoVehiculo}}</option>
                        @endforeach
                    </select>
                </li>
                <li><label>Marca:</label> <input type="text" name="marca" value="Fiat" id="" readonly> </li>
                <li><label>* Modelo:</label><input type="text" name="modelo" value="" id="" required></li>
                <li><label>* Año:</label> <input type="number" accept="number" name="anio" value="" id="" required> </li>
                <li><label>* Patente:</label><input type="text" name="patente" value="" id="" minlength=7 required> </li>
                <li><label>* Número de Chasis:</label><input type="text" name="nro_chasis" value="" id="" minlength=7 required> </li>
                <li><label>* Inicio de garantía:</label> <input type="date" name="fecha_inicio_garantia" value="" id="" required></li>
                <br>
                               	
                <li> <input type="submit" name="btnRegistrarse" value="REGISTRARSE" placeholder="" id="registrarse"/> </li>
            </ul>
        </form>
    </div>
            
                
        
                
                
<!-- JavaScript Librerias -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
        
        
                
</body>
</html>        			