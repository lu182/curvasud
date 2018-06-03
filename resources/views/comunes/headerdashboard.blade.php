<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
      <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
      <!-- CSS Files -->
      <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
      <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
      <link href="../assets/css/animate.css" rel="stylesheet" />
   </head>
   <body>
      <div class="wrapper">

      <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
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
                     <i class="nc-icon nc-circle-09"></i>
                     <p>Mis datos</p>
                  </a>
               </li>
               <li>
                  <a class="nav-link" href="{{ route('misturnos') }}">
                     <i class="nc-icon nc-notes"></i>
                     <p>Mis Turnos</p>
                  </a>
               </li>
               <li>
                  <a class="nav-link" href="{{ route('mivehiculo') }}">
                     <i class="nc-icon nc-notes"></i>
                     <p>Mis Vehículos</p>
                  </a>
               </li>
               <li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                     @csrf
                     <a class="nav-link" onclick="logout-form.submit();" id="btnLogout">
                        <i class="nc-icon nc-tap-01"></i>
                        <p>Cerrar Sesión</p>
                     </a>
                  </form>
               </li>
               <li class="nav-item active active-pro">
                  <a class="nav-link active" href="{{route('turnero')}}">
                     <i class="nc-icon nc-alien-33"></i>
                     <p>Solicitar Turno</p>
                  </a>
               </li>
               @endif

               @if (  Auth::user()->tipo_user_id == 2 )
               <ul class="nav">
               <li class="nav-item ">
                    <a class="nav-link" href="{{ route('escritorio') }}">
                       <i class="nc-icon nc-circle-09"></i>
                       <p>Escritorio</p>
                    </a>
                 </li>
                 <li class="nav-item ">
                    <a class="nav-link" href="{{ route('misdatos') }}">
                       <i class="nc-icon nc-circle-09"></i>
                       <p>Mis datos</p>
                    </a>
                 </li>
                 <li class="nav-item ">
                        <a class="nav-link" href="{{ route('/encargado/','consultas') }}">
                           <i class="nc-icon nc-circle-09"></i>
                           <p>Consultas</p>
                        </a>
                     </li>

                     <li class="nav-item ">
                            <a class="nav-link" href="{{ route('/encargado/','reportes') }}">
                               <i class="nc-icon nc-circle-09"></i>
                               <p>Reportes</p>
                            </a>
                         </li>


                 <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                           @csrf
                           <a class="nav-link" onclick="logout-form.submit();" id="btnLogout">
                              <i class="nc-icon nc-tap-01"></i>
                              <p>Cerrar Sesión</p>
                           </a>
                        </form>
                     </li>


               @endif

               @if (  Auth::user()->tipo_user_id == 3 )
               <ul class="nav">
               <li class="nav-item ">
                    <a class="nav-link" href="{{ route('escritorio') }}">
                       <i class="nc-icon nc-circle-09"></i>
                       <p>Escritorio</p>
                    </a>
                 </li>
                 <li class="nav-item ">
                    <a class="nav-link" href="{{ route('misdatos') }}">
                       <i class="nc-icon nc-circle-09"></i>
                       <p>Mis datos</p>
                    </a>
                 </li>
                 <li class="nav-item ">
                        <a class="nav-link" href="">
                           <i class="nc-icon nc-circle-09"></i>
                           <p>Consultas</p>
                        </a>
                     </li>

                     <li class="nav-item ">
                            <a class="nav-link" href="">
                               <i class="nc-icon nc-circle-09"></i>
                               <p>Reportes</p>
                            </a>
                         </li>

                         <li class="nav-item ">
                                <a class="nav-link" href="">
                                   <i class="nc-icon nc-circle-09"></i>
                                   <p>Registrar Mecánico</p>
                                </a>
                             </li>

                             <li class="nav-item ">
                                    <a class="nav-link" href="">
                                       <i class="nc-icon nc-circle-09"></i>
                                       <p>Registrar órden de reparación</p>
                                    </a>
                                 </li>


                 <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                           @csrf
                           <a class="nav-link" onclick="logout-form.submit();" id="btnLogout">
                              <i class="nc-icon nc-tap-01"></i>
                              <p>Cerrar Sesión</p>
                           </a>
                        </form>
                     </li>
                 @endif

                 @if (  Auth::user()->tipo_user_id == 4 )
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
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" >
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
                         <img src="../assets/img/sidebar-1.jpg" alt="" />
                     </a>
                 </li>
                 <li>
                     <a class="img-holder switch-trigger" href="javascript:void(0)">
                         <img src="../assets/img/sidebar-3.jpg" alt="" />
                     </a>
                 </li>
                 <li>
                     <a class="img-holder switch-trigger" href="javascript:void(0)">
                         <img src="..//assets/img/sidebar-4.jpg" alt="" />
                     </a>
                 </li>
                 <li>
                     <a class="img-holder switch-trigger" href="javascript:void(0)">
                         <img src="../assets/img/sidebar-5.jpg" alt="" />
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
   <script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
   <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
   <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
   <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
   <script src="../assets/js/plugins/bootstrap-switch.js"></script>
   <!--  Google Maps Plugin    -->
   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
   <!--  Chartist Plugin  -->
   <script src="../assets/js/plugins/chartist.min.js"></script>
   <!--  Notifications Plugin    -->
   <script src="../assets/js/plugins/bootstrap-notify.js"></script>
   <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
   <script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
   <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
   <!-- <script src="../assets/js/demo.js"></script>-->
   <script type="text/javascript">
      $(document).ready(function() {
          // Javascript method's body can be found in assets/js/demos.js
          demo.initDashboardPageCharts();
      
          demo.showNotification();
      
      });
   </script>
</html>