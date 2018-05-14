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
            <br>
            <br>
            <br>
            <ul> 
                <li><label>Nombre de usuario:</label> <input type="text" name="txtUsuario" placeholder="Ingrese un nombre de usuario" id="" required /> </li>
                <li><label>Email:</label> <input type="email" name="txtEmail" value="" placeholder="Ingrese su correo electrónico" id="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3}$" title="Incluye un signo @, por ejemplo: nombre@dominio.com" required /> </li>
                <li><label>Contraseña:</label> <input type="password" name="txtContra" value="" placeholder="Ingrese una contraseña" id="" pattern="(?=.*\d)(?=.*[a-z]).{8,}" title="Debe contener un minimo de 8 caracteres y al menos un número y una letra" required /> </li>
                <li><label>Tipo de documento:</label>
                    <select name="comboDni" id="comboDni" required>
                        <option value="Dni" selected>DNI</option>
                        <option value="Pasaporte">Pasaporte</option>
                        <option value="Le">LE</option>				
                    </select>
                </li>
                <li><label>Dni:</label> <input type="number" name="txtDni" accept="number" value="" id="" maxlength="8" required> </li>
                <li><label>Ciudad/Localidad:</label>
                    <select name="comboCiudades" id="comboCiudades" required>
                        <option value="Cordoba" selected>Córdoba</option>
                        <option value="Villa maria">Villa maria</option>
                        <option value="Rio Cuarto">Rio Cuarto</option>
                        <option value="Jesus Maria">Jesús Maria</option>
                        <option value="Alta Gracia">Alta Gracia</option>
                        <option value="Dean Funes">Dean Funes</option>
                        <option value="La Falda">La Falda</option>
                        <option value="Capilla Del Monte">Capilla Del Monte</option>
                        <option value="Agua De Oro">Agua De Oro</option>
                        <option value="Otro">Otro</option>
                    </select> 
                </li>
                <li><label>Nombre:</label> <input type="text" name="txtNombre" value="" id="" required> </li>
                <li><label>Apellido:</label> <input type="text" name="txtApellido" value="" id="" required> </li>
                <li><label>Fecha de nacimiento:</label> <input type="date" name="txtFechaNac" value="" id=""></li>
                <li><label>Razón social:</label> <input type="text" name="txtRazon" value="" id="">  </li>
                <li> <label>Domicilio:</label> <input type="text" name="txtDomicilio" value="" id=""> </li>
                <li><label>Cód. Postal:</label> <input type="number" accept="number" name="txtCodPostal" value="" id=""> </li>
                <li><label>Teléfono:</label> <input type="text" name="txtTel" value="" id="" required> </li>
                <br>
                <b> DATOS DEL VEHÍCULO</b>
                <br>
                <br>
                <br>
                <li><label>Tipo de vehiculo:</label>
                    <select name="comboTiposV" id="comboTiposV" required>
                        <option value="Auto" selected>Auto</option>
                        <option value="Pick up">Pick up</option>
                        <option value="Utilitario">Utilitario</option>
                    </select>
                </li>
                <li><label>Marca:</label> <input type="text" name="txtMarca" value="Fiat" id="" readonly> </li>
                <li><label>Modelo:</label><input type="text" name="txtModelo" value="" id="" required></li>
                <li><label>Año:</label> <input type="number" accept="number" name="txtAño" value="" id="" required> </li>
                <li><label>Patente:</label><input type="text" name="txtPatente" value="" id="" minlength=7 required> </li>
                <li><label>Número de Chasis:</label><input type="text" name="txtChasis" value="" id="" minlength=7 required> </li>
                <li><label>Inicio de garantía:</label> <input type="date" name="txtFechaGarantia" value="" id="" required></li>
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