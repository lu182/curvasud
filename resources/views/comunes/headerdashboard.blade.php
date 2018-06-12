<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Curvasud</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'
    />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/light-bootstrap-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('tablas/estilo.css')}}" rel="stylesheet" />
    <link href="{{asset('calendario/styles/glDatePicker.default.css')}}" rel="stylesheet" />
    <link href="{{asset('select/estilo.css')}}" rel="stylesheet" />

</head>

<body>
    <div class="wrapper">

        <div class="sidebar" data-image="{{asset('assets/img/header7.jpg')}}">
            <div class="sidebar-wrapper">
                <div class="logo" style="text-align:center">
                    <img src="{{asset('img/logocurvasud.png')}}" style="max-width: 70%;margin:auto">

                </div>

                @if(Auth::user()->tipo_user_id == 1)
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('escritorio') }}">
                     <i class="nc-icon nc-circle-09"></i>
                     <p>Escritorio</p>
                  </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('misdatos') }}">
                     <i class="nc-icon nc-badge"></i>
                     <p>Mis datos</p>
                  </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('misturnos') }}">
                     <i class="nc-icon nc-bell-55"></i>
                     <p>Mis Turnos</p>
                  </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('mivehiculo') }}">
                     <i class="nc-icon nc-notes"></i>
                     <p>Mis Vehículos</p>
                  </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('principal') }}">
                       <i class="nc-icon nc-zoom-split"></i>
                       <p>Ir al sitio</p>
                    </a>
                    </li>

                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a class="nav-link" onclick="logout-form.submit();" id="btnLogout">
                        <i class="nc-icon nc-tap-01"></i>
                        <p>Cerrar Sesión</p>
                     </a>
                        </form>
                    </li>
                    @if ( count(Auth::user()->vehiculo) > 0 )

                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="{{route('turnero')}}">
                     <i class="nc-icon nc-settings-tool-66"></i>
                     <p>Solicitar Turno</p>
                  </a>
                    </li>
                    @else


                    <li class="nav-item active active-pro"  style="margin-top:15px!important;position:relative">
                        <a class="nav-link active disabled" href="{{ route('mivehiculo') }}" >
                       <i class="nc-icon nc-settings-tool-66"></i>
                       <p>Registrar vehiculo para solicitar turno</p>
                    </a>
                    </li>
                    @endif @endif @if ( Auth::user()->tipo_user_id == 2 )
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('escritorio') }}">
                       <i class="nc-icon nc-circle-09"></i>
                       <p>Escritorio</p>
                    </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('misdatos') }}">
                       <i class="nc-icon nc-badge"></i>
                       <p>Mis datos</p>
                    </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('/encargado/','consultas') }}">
                           <i class="nc-icon nc-check-2"></i>
                           <p>Consultas</p>
                        </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('/encargado/','reportes') }}">
                               <i class="nc-icon nc-chart-pie-35"></i>
                               <p>Reportes</p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('principal') }}">
                                   <i class="nc-icon nc-zoom-split"></i>
                                   <p>Ir al sitio</p>
                                </a>
                        </li>


                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a class="nav-link" onclick="logout-form.submit();" id="btnLogout">
                              <i class="nc-icon nc-tap-01"></i>
                              <p>Cerrar Sesión</p>
                           </a>
                            </form>
                        </li>


                        @endif @if ( Auth::user()->tipo_user_id == 3 )
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('escritorio') }}">
                       <i class="nc-icon nc-circle-09"></i>
                       <p>Escritorio</p>
                    </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('misdatos') }}">
                       <i class="nc-icon nc-badge"></i>
                       <p>Mis datos</p>
                    </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('/jefetaller/','consultas') }}">
                           <i class="nc-icon nc-check-2"></i>
                           <p>Consultas</p>
                        </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('/jefetaller/','reportes') }}">
                               <i class="nc-icon nc-chart-pie-35"></i>
                               <p>Reportes</p>
                            </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('/jefetaller/registrarmecanico') }}">
                                   <i class="nc-icon nc-settings-90"></i>
                                   <p>Registrar Mecánico</p>
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('/jefetaller/ordenreparacion') }}">
                                       <i class="nc-icon nc-paper-2"></i>
                                       <p>Registrar órden de reparación</p>
                                    </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('principal') }}">
                                           <i class="nc-icon nc-zoom-split"></i>
                                           <p>Ir al sitio</p>
                                        </a>
                            </li>


                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a class="nav-link" onclick="logout-form.submit();" id="btnLogout">
                              <i class="nc-icon nc-tap-01"></i>
                              <p>Cerrar Sesión</p>
                            </a>
                                </form>
                            </li>
                            @endif @if ( Auth::user()->tipo_user_id == 4 )
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('escritorio') }}">
                         <i class="nc-icon nc-circle-09"></i>
                         <p>Escritorio</p>
                      </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="">
                         <i class="nc-icon nc-circle-09"></i>
                         <p>Registrar empleados</p>
                      </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="">
                             <i class="nc-icon nc-circle-09"></i>
                             <p>Registrar clientes</p>
                          </a>
                                </li>




                                <li class="nav-item ">
                                    <a class="nav-link" href="">
                                 <i class="nc-icon nc-circle-09"></i>
                                 <p>Otras acciones</p>
                              </a>
                                </li>


                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <a class="nav-link" onclick="logout-form.submit();" id="btnLogout">
                                <i class="nc-icon nc-tap-01"></i>
                                <p>Cerrar Sesión</p>
                             </a>
                                    </form>
                                </li>
                                @endif

                                <script>
                                    document.getElementById("btnLogout").onclick = function() {myFunction()};

                  function myFunction() {
                      document.getElementById("logout-form").submit();
                  }
                                </script>
                            </ul>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                @yield("content")
                <!--  Termina el contenido -->
                <!-- <div class="fixed-plugin">
         <div class="dropdown show-dropdown">
             <a href="#" data-toggle="dropdown">
                 <i class="fa fa-cog fa-2x"> </i>
             </a>

             <ul class="dropdown-menu">
         <li class="header-title"> Sidebar Style</li>
                 <li class="adjustments-line">
                     <a href="javascript:void(0)" class="switch-trigger">
                         <p>Background Image</p>
                         <label class="switch">
                             <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                         </label>
                         <div class="clearfix"></div>
                     </a>
                 </li>

                 <li class="adjustments-line">
                     <a href="javascript:void(0)" class="switch-trigger background-color">
                         <p>Filters</p>
                         <div class="pull-right">
                             <span class="badge filter badge-black" data-color="black"></span>
                             <span class="badge filter badge-azure" data-color="azure"></span>
                             <span class="badge filter badge-green" data-color="green"></span>
                             <span class="badge filter badge-orange" data-color="orange"></span>
                             <span class="badge filter badge-red" data-color="red"></span>
                             <span class="badge filter badge-purple active" data-color="purple"></span>
                         </div>
                         <div class="clearfix"></div>
                     </a>
                 </li>
                 <li class="header-title">Sidebar Images</li>

                 <li class="active">
                     <a class="img-holder switch-trigger" href="javascript:void(0)">
                         <img src="{{asset('assets/img/sidebar-1.jpg')}}" alt="" />
                     </a>
                 </li>
                 <li>
                     <a class="img-holder switch-trigger" href="javascript:void(0)">
                         <img src="{{asset('assets/img/sidebar-3.jpg')}}" alt="" />
                     </a>
                 </li>
                 <li>
                     <a class="img-holder switch-trigger" href="javascript:void(0)">
                         <img src="..//assets/img/sidebar-4.jpg')}}" alt="" />
                     </a>
                 </li>
                 <li>
                     <a class="img-holder switch-trigger" href="javascript:void(0)">
                         <img src="{{asset('assets/img/sidebar-5.jpg')}}" alt="" />
                     </a>
                 </li>


                 <li class="button-container">
                     <div class="">
                         <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                     </div>
                 </li>

                 <li class="header-title pro-title text-center">Want more components?</li>

                 <li class="button-container">
                     <div class="">
                         <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                     </div>
                 </li>




                 <li class="header-title pro-title text-center">Want more components?</li>




                 <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

                 <li class="button-container">
         <button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                     <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
                 </li>
             </ul>
         </div>
         </div>
         -->
</body>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->

<script src="{{asset('assets/js/plugins/bootstrap-switch.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<script src="../assets/js/plugins/bootstrap-switch.js"></script>

<!--  Chartist Plugin  -->
<script src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{asset('assets/js/light-bootstrap-dashboard.js?v=2.0.1')}}" type="text/javascript"></script>
    <script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>



<script type="text/javascript">
    // var tablas = $("#tabla")
      $(document).ready(function() {
       var tabla =  $('table').dataTable({
            "language": {

                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }

            }
        } );
    }

    );

</script>

<script src="{{asset('tablas/js.js')}}"></script>

</html>



<script>
    $(document).ready(function (){

        $(".seleccionVehiculo").hide();
            $("#ciudad_input").hide();
            $("#selector_ciudad").change(function() {
                // Mostramos el campo de ingresar ciudad basado en el valor del select
                if ($(this).val() == "0") {
                    $("#ciudad_input").fadeIn();
                }else{
                    $("#ciudad_input").fadeOut();
                }
            });

            $("#ciudad_input2").hide();
            $("#selector_ciudad2").change(function() {
                // Mostramos el campo de ingresar ciudad basado en el valor del select
                if ($(this).val() == "0") {
                    $("#ciudad_input2").fadeIn();
                }else{
                    $("#ciudad_input2").fadeOut();
                }
            });
        });

</script>
<script src="{{asset('calendario/glDatePicker.min.js')}}" ></script>
<script src="{{asset('select/select.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
            $('.js-example-language').select2({
                language: {
                    formatNoMatches: function () { return "No se encontraron resultados"; },
                }
              });
        });


        var today = new Date();
    var future = new Date(today);

    // Dejamos que el usuario seleccione desde hoy hasta dentro de 1 año
    future.setDate(today.getDate() + 728);

     var $calendar = $('#calendario').glDatePicker(

    {
        showAlways: true,
        selectedDate: new Date(),
        selectableDOW: [1, 2, 3,4,5],
        allowYearSelect: false,
        selectableDateRange: [ { from: today, to: future } ],
        monthNames: [ 'ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE' ],
        dowNames:["Dom","Lun","Mar","Mier","Jue","Vier","Sab"],
       onClick: function(target, cell, date, data) {

        var mes = date.getMonth();
        if(mes < 9){
            mes = "0"+(mes+1);

        }else{
            var mes = date.getMonth();

            mes = (mes+1)

        }
			$("#calendario").val(date.getFullYear() + '-' +
						mes + '-' +
						date.getDate());

			if(data != null) {
				alert("seleccione una fecha válida");
			}
		}

    });



    function vehiculoscliente(obj)
  {
    $(".seleccionVehiculo").show();

    $('#vehiculos').empty()
    var dropDown = document.getElementById("buscarclientes");
    var carId = dropDown.options[dropDown.selectedIndex].value;
    $.ajax({
            type: "GET",
            url: "http://curvasud.com/api/vehiculoclienteajax/"+carId,
           // data: { 'carId': carId  },
            success: function(data){

                // Parse the returned json data
                var opts = $.parseJSON(data);

                // Use jQuery's each to iterate over the opts value
                $.each(opts, function(i, d) {
                    // You will need to alter the below to get the right values from your json object.  Guessing that d.id / d.modelName are columns in your carModels data
                    $('#vehiculos').append('<option value="' + d.id_vehiculo + '">' + d.modelo + '</option>');
                });
            }
        });
  }

</script>

</html>
