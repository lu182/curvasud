@extends('newHome.layout')

@section("content")
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container" style="margin-top:5%">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                   Services
                </h1>
                <p class="text-white link-nav"><a href="{{ route('inicio') }}">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Servicios</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->


<!-- Start about-video Area -->
<section class="about-video-area section-gap">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 about-video-left">
                <h6 class="text-uppercase">Conocé nuestros servicios de mantenimiento</h6>
                <h1> MANTENIMIENTO PROGRAMADO </h1>

                <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Modelo</th>
                            <th scope="col">10.000 Km</th>
                            <th scope="col">20.000 Km</th>
                            <th scope="col">30.000 Km</th>
                            <th scope="col">40.000 Km</th>
                            <th scope="col">50.000 Km</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Uno - Fiorino Fire</th>
                            <td>$3063</td>
                            <td>$3686</td>
                            <td>$3241</td>
                            <td>$5491</td>
                            <td>$3063</td>
                          </tr>
                          <tr>
                            <th scope="row">Nuevo Uno - Nueva Fior XMF</th>
                            <td>$3267</td>
                            <td>$4449</td>
                            <td>$3572</td>
                            <td>$6604</td>
                            <td>$3280</td>
                          </tr>
                          <tr>
                            <th scope="row">Palio/WE/Siena/Strada/Idea/Palio 326/GSiena 1.4</th>
                            <td>$3458</td>
                            <td>$4741</td>
                            <td>$3769</td>
                            <td>$6165</td>
                            <td>$3458</td>
                          </tr>
                          <tr>
                            <th scope="row">Palio/WE/Siena/Strada/Idea/Palio 326/GSiena 1.6</th>
                            <td>$3864</td>
                            <td>$4983</td>
                            <td>$3998</td>
                            <td>$6191</td>
                            <td>$3864</td>
                            </tr>
                            <tr>
                                <th scope="row">Palio/WE/Siena/Strada/Idea 1.8</th>
                                <td>$3445</td>
                                <td>$4119</td>
                                <td>$3724</td>
                                <td>$5816</td>
                                <td>$3432</td>
                            </tr>
                            <tr>
                                <th scope="row">Punto</th>
                                <td>$3591</td>
                                <td>$4831</td>
                                <td>$3610</td>
                                <td>$6267</td>
                                <td>$3591</td>
                            </tr>  
                            <tr>
                                <th scope="row">Qubo 1.4</th>
                                <td>$3721</td>
                                <td>$4932</td>
                                <td>$4068</td>
                                <td>$6610</td>
                                <td>$3724</td>
                            </tr>    
                            <tr>
                                <th scope="row">500</th>
                                <td>$3521</td>
                                <td>$4432</td>
                                <td>$4268</td>
                                <td>$6710</td>
                                <td>$3824</td>
                            </tr>
                            <tr>
                                <th scope="row">Bravo</th>
                                <td>$3321</td>
                                <td>$4132</td>
                                <td>$4268</td>
                                <td>$6310</td>
                                <td>$3420</td>
                            </tr> 
                            <tr>
                                <th scope="row">Dobló</th>
                                <td>$3621</td>
                                <td>$4532</td>
                                <td>$4073</td>
                                <td>$6510</td>
                                <td>$3624</td>
                            </tr>
                            <tr>
                                <th scope="row">Argo</th>
                                <td>$3340</td>
                                <td>$4588</td>
                                <td>$4289</td>
                                <td>$6523</td>
                                <td>$3525</td>
                            </tr>
                            <tr>
                                <th scope="row">Toro 2.0 MJT</th>
                                <td>$3555</td>
                                <td>$4682</td>
                                <td>$4128</td>
                                <td>$6210</td>
                                <td>$3480</td>
                            </tr> 
                            <tr>
                                <th scope="row">Cronos</th>
                                <td>$3672</td>
                                <td>$4710</td>
                                <td>$4068</td>
                                <td>$6650</td>
                                <td>$3254</td>
                            </tr>                
                            <tr>
                                <th scope="row">Mobi</th>
                                <td>$3451</td>
                                <td>$4632</td>
                                <td>$4570</td>
                                <td>$6410</td>
                                <td>$3829</td>
                            </tr>  
                            <tr>
                                <th scope="row">Ducato</th>
                                <td>$3220</td>
                                <td>$4830</td>
                                <td>$4567</td>
                                <td>$6653</td>
                                <td>$3523</td>
                            </tr> 

                        </tbody>
                </table>
            </div>
        </div> <!-- fin div row -->
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h1 class="tit">PACKS</h1>
            </div>
            <br>
            <br>
            <div class="at2 col-md-6 col-sm-6 col-xs-12 ">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2">Cambio de líquido de frenos</th>
                            </tr>
                         </thead>
                         
                        <tbody>
                            <tr>
                                <td>Línea 1.8 - 1.9</td>
                                <td>$1367</td>
                            </tr>
                         
                            <tr>
                                <td>500 Evo - Multi Air</td>
                                <td>$1367</td>
                            </tr>
                         
                            <tr>
                                <td>Dobló - Dobló Cargo</td>
                                <td>$1367</td>
                            </tr>
                         
                            <tr>
                                <td>Qubo</td>
                                <td>$1367</td>
                            </tr>
                         
                            <tr>
                                <td>Stilo - Punto 1.8 8V</td>
                                <td>$1367</td>
                            </tr>
                         
                            <tr>
                                <td>Punto 1.4 - 1.6</td>
                                <td>$1367</td>
                            </tr>
                         
                            <tr>
                                <td>Punto - Strada JTD</td>
                                <td>$1367</td>
                            </tr>
                         
                            <tr>
                                <td>Palio - Siena - Weekend - Idea - Strada</td>
                                <td>$1367</td>
                            </tr>
                         
                            <tr>
                                <td>Nuevo Uno</td>
                                <td>$1367</td>
                            </tr>
                         
                            <tr>
                                <td>Uno - Fiorino 1.3 8V</td>
                                <td>$1367</td>
                            </tr>
                         
                            <tr>
                                <td>500L 1.4 16V</td>
                                <td>$1367</td>
                            </tr>
                         
                            <tr>
                                <td>Bravo</td>
                                <td>$1367</td>
                            </tr>
                         
                            <tr>
                                <td>Mobi 1.0 8V</td>
                                <td>$1367</td>
                            </tr>
                         
                            <tr>
                                <td>Toro 2.0 MJT</td>
                                <td>$1367</td>
                            </tr>
                         
                             </tbody>
                         </table>
                </div> <!-- fin div table responsive -->
            </div> <!-- fin div class at2 col-md-6 col-sm-6 col-xs-12 -->

            <div class="at2 col-md-6 col-sm-6 col-xs-12 ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="2">Cambio de líquido refrigerante y limpieza del circuito</th>
                                </tr>
                             </thead>
                             
                            <tbody>
                                <tr>
                                    <td>Línea 1.8 - 1.9</td>
                                    <td>$1440</td>
                                </tr>
                             
                                <tr>
                                    <td>500 Evo - Multi Air</td>
                                    <td>$1440</td>
                                </tr>
                             
                                <tr>
                                    <td>Dobló - Dobló Cargo</td>
                                    <td>$1440</td>
                                </tr>
                             
                                <tr>
                                    <td>Qubo</td>
                                    <td>$1440</td>
                                </tr>
                             
                                <tr>
                                    <td>Stilo - Punto 1.8 8V</td>
                                    <td>$1440</td>
                                </tr>
                             
                                <tr>
                                    <td>Punto 1.4 - 1.6</td>
                                    <td>$1440</td>
                                </tr>
                             
                                <tr>
                                    <td>Punto - Strada JTD</td>
                                    <td>$1440</td>
                                </tr>
                             
                                <tr>
                                    <td>Palio - Siena - Weekend - Idea - Strada</td>
                                    <td>$1440</td>
                                </tr>
                             
                                <tr>
                                    <td>Nuevo Uno</td>
                                    <td>$1440</td>
                                </tr>
                             
                                <tr>
                                    <td>Uno - Fiorino 1.3 8V</td>
                                    <td>$1440</td>
                                </tr>
                             
                                <tr>
                                    <td>500L 1.4 16V</td>
                                    <td>$1440</td>
                                </tr>
                             
                                <tr>
                                    <td>Bravo</td>
                                    <td>$1440</td>
                                </tr>
                             
                                <tr>
                                    <td>Mobi 1.0 8V</td>
                                    <td>$1440</td>
                                </tr>
                             
                                <tr>
                                    <td>Toro 2.0 MJT</td>
                                    <td>$1440</td>
                                </tr>
                             
                                 </tbody>
                             </table>
                    </div> <!-- fin div table responsive -->
                </div> <!-- fin div class at2 col-md-6 col-sm-6 col-xs-12 -->
                
                <div class="at2 col-md-6 col-sm-6 col-xs-12 ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="2">Cambio de bujía</th>
                                </tr>
                            </thead>
                             
                            <tbody>
                                <tr>
                                    <td>Bravo</td>
                                    <td>2359</td>
                                </tr>
                             
                                     <tr>
                                         <td>
                                             Línea 1.8 - 1.9
                                         </td>
                                         <td>
                                             1098
                                         </td>
                                     </tr>
                             
                                     <tr>
                                         <td>
                                             500 Evo - Multi Air
                                         </td>
                                         <td>
                                             1258
                                         </td>
                                     </tr>
                             
                                     <tr>
                                         <td>
                                             Dobló - Dobló Cargo
                                         </td>
                                         <td>
                                             1346
                                         </td>
                                     </tr>
                             
                                     <tr>
                                         <td>
                                             Qubo
                                         </td>
                                         <td>
                                             1535
                                         </td>
                                     </tr>
                             
                                     <tr>
                                         <td>
                                             Punto 1.4 - 1.6
                                         </td>
                                         <td>
                                             1065
                                         </td>
                                     </tr>
                             
                                     <tr>
                                         <td>
                                             Palio - Siena - Weekend - Idea - Strada 1.4
                                         </td>
                                         <td>
                                             922
                                         </td>
                                     </tr>
                             
                                     <tr>
                                         <td>
                                             Palio - Siena - Weekend - Idea - Strada 1.6
                                         </td>
                                         <td>
                                             1065
                                         </td>
                                     </tr>
                             
                                     <tr>
                                         <td>
                                             Nuevo Uno
                                         </td>
                                         <td>
                                             1062
                                         </td>
                                     </tr>
                             
                                     <tr>
                                         <td>
                                             Uno - Fiorino 1.3 8V Fire
                                         </td>
                                         <td>
                                             865
                                         </td>
                                     </tr>
                             
                                     <tr>
                                         <td>
                                             500L 1.4 16V
                                         </td>
                                         <td>
                                             1436
                                         </td>
                                     </tr>
                             
                                     <tr>
                                         <td>
                                             Mobi 1.0 8V
                                         </td>
                                         <td>
                                             922
                                         </td>
                                     </tr>
                             
                                     <tr>
                                         <td>
                                             Toro 2.0 MJT
                                         </td>
                                         <td>
                                             2322
                                         </td>
                                     </tr>
                             
                                     <tr>
                                         <td>
                                             Punto 1.8 8v
                                         </td>
                                         <td>
                                             973
                                         </td>
                                     </tr>
                             
                                     <tr>
                                         <td>
                                             Argo / Cronos 1.3
                                         </td>
                                         <td>
                                             3200
                                         </td>
                                     </tr>
                             
                                     <tr>
                                         <td>
                                             Argo / Cronos 1.8
                                         </td>
                                         <td>
                                             2300
                                         </td>
                                     </tr>
                             
                                 </tbody>
                             </table>
                         </div>
                     </div>

                     <div class="at2 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Cambio de escobillas y líquido limpiaparabrisas</th>
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                        <tr>
                                            <td>Argo</td>
                                             <td>1200</td>
                                        </tr>
                                 
                                         <tr>
                                             <td>
                                                 Cronos
                                             </td>
                                             <td>
                                                 1050
                                             </td>
                                         </tr>
                                 
                                         <tr>
                                             <td>
                                                 Mobi 1.0 8V
                                             </td>
                                             <td>
                                                 1050
                                             </td>
                                         </tr>
                                 
                                         <tr>
                                             <td>
                                                 Toro 2.0 MJT
                                             </td>
                                             <td>
                                                 1745
                                             </td>
                                         </tr>
                                 
                                         <tr>
                                             <td>
                                                 Uno - Fiorino 1.3 8v Fire
                                             </td>
                                             <td>
                                                 762
                                             </td>
                                         </tr>
                                 
                                         <tr>
                                             <td>
                                                 500L 1.4 16V
                                             </td>
                                             <td>
                                                 1626
                                             </td>
                                         </tr>
                                 
                                         <tr>
                                             <td>
                                                 Palio - Siena - Weekend - Idea - Strada 1,6
                                             </td>
                                             <td>
                                                 1211
                                             </td>
                                         </tr>
                                 
                                         <tr>
                                             <td>
                                                 Palio - Siena - Weekend - Idea - Strada 1,4
                                             </td>
                                             <td>
                                                 1098
                                             </td>
                                         </tr>
                                 
                                         <tr>
                                             <td>
                                                 Bravo
                                             </td>
                                             <td>
                                                 2191
                                             </td>
                                         </tr>
                                 
                                         <tr>
                                             <td>
                                                 Línea 1.8 - 1.9
                                             </td>
                                             <td>
                                                 1286
                                             </td>
                                         </tr>
                                 
                                         <tr>
                                             <td>
                                                 500 Evo - Multi Air
                                             </td>
                                             <td>
                                                 2319
                                             </td>
                                         </tr>
                                 
                                         <tr>
                                             <td>
                                                 Dobló - Dobló Cargo
                                             </td>
                                             <td>
                                                 1928
                                             </td>
                                         </tr>
                                 
                                         <tr>
                                             <td>
                                                 Qubo
                                             </td>
                                             <td>
                                                 1840
                                             </td>
                                         </tr>
                                 
                                         <tr>
                                             <td>
                                                 Stilo - Punto 1.8 8V
                                             </td>
                                             <td>
                                                 1436
                                             </td>
                                         </tr>
                                 
                                         <tr>
                                             <td>
                                                 Punto 1.4 - 1.6
                                             </td>
                                             <td>
                                                 1186
                                             </td>
                                         </tr>
                                 
                                         <tr>
                                             <td>
                                                 Nuevo Uno
                                             </td>
                                             <td>
                                                 1211
                                             </td>
                                         </tr>
                                 
                                     </tbody>
                                 </table>
                             </div>
                         </div>

                         <div class="at2 col-md-6 col-sm-6 col-xs-12 ">
                                <div class="table-responsive">
                                    <table class="table">
                                    <thead>
                                     
                                         <tr><th colspan="2">
                                             Cambio de aceite y filtro. EXPRESS LANE
                                         </th>
                                     </tr>
                                     </thead>
                                     
                                             <tbody><tr>
                                                 <td>
                                                     1.7 TD discontinuado
                                                 </td>
                                                 <td>
                                                     1862
                                                 </td>
                                             </tr>
                                     
                                             <tr>
                                                 <td>
                                                     1.4 Fire y 1.4 Evo
                                                 </td>
                                                 <td>
                                                     1823
                                                 </td>
                                             </tr>
                                     
                                             <tr>
                                                 <td>
                                                     1.8 Nafta discontinuado
                                                 </td>
                                                 <td>
                                                     1597
                                                 </td>
                                             </tr>
                                     
                                             <tr>
                                                 <td>
                                                     1.3 Fire
                                                 </td>
                                                 <td>
                                                     1823
                                                 </td>
                                             </tr>
                                     
                                             <tr>
                                                 <td>
                                                     1.4 Qubo
                                                 </td>
                                                 <td>
                                                     2273
                                                 </td>
                                             </tr>
                                     
                                             <tr>
                                                 <td>
                                                     1.6 y 1.8 E-Torq
                                                 </td>
                                                 <td>
                                                     2225
                                                 </td>
                                             </tr>
                                     
                                             <tr>
                                                 <td>
                                                     1.4 miltiair
                                                 </td>
                                                 <td>
                                                     2161
                                                 </td>
                                             </tr>
                                     
                                             <tr>
                                                 <td>
                                                     1.4 Fire 16v
                                                 </td>
                                                 <td>
                                                     1515
                                                 </td>
                                             </tr>
                                     
                                             <tr>
                                                 <td>
                                                     1.0 8v
                                                 </td>
                                                 <td>
                                                     1702
                                                 </td>
                                             </tr>
                                     
                                             <tr>
                                                 <td>
                                                     2.0 MJT
                                                 </td>
                                                 <td>
                                                     2341
                                                 </td>
                                             </tr>
                                     
                                             <tr>
                                                 <td>
                                                     2.3 JTD
                                                 </td>
                                                 <td>
                                                     2700
                                                 </td>
                                             </tr>
                                     
                                             <tr>
                                                 <td>
                                                     1.3 MJTD
                                                 </td>
                                                 <td>
                                                     2266
                                                 </td>
                                             </tr>
                                     
                                             <tr>
                                                 <td>
                                                     Argo/Cronos
                                                 </td>
                                                 <td>
                                                     2000
                                                 </td>
                                             </tr>
                                     
                                         </tbody>
                                     </table>
                                 </div>
                             </div>

                             <div class="at2 col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="table-responsive">
                                        <table class="table">
                                        <thead>
                                         
                                             <tr><th colspan="2">
                                                 Control y carga del equipo de aire acondicionado
                                             </th>
                                         </tr>
                                         </thead>
                                         
                                                 <tbody><tr>
                                                     <td>
                                                         Argo
                                                     </td>
                                                     <td>
                                                         1521
                                                     </td>
                                                 </tr>
                                         
                                                 <tr>
                                                     <td>
                                                         Cronos
                                                     </td>
                                                     <td>
                                                         1521
                                                     </td>
                                                 </tr>
                                         
                                                 <tr>
                                                     <td>
                                                         Mobi 1.0 8V
                                                     </td>
                                                     <td>
                                                         1521
                                                     </td>
                                                 </tr>
                                         
                                                 <tr>
                                                     <td>
                                                         Toro 2.0 MJT
                                                     </td>
                                                     <td>
                                                         1521
                                                     </td>
                                                 </tr>
                                         
                                                 <tr>
                                                     <td>
                                                         500L 1.4 16V
                                                     </td>
                                                     <td>
                                                         1521
                                                     </td>
                                                 </tr>
                                         
                                                 <tr>
                                                     <td>
                                                         Bravo
                                                     </td>
                                                     <td>
                                                         1521
                                                     </td>
                                                 </tr>
                                         
                                                 <tr>
                                                     <td>
                                                         Línea 1.8 - 1.9
                                                     </td>
                                                     <td>
                                                         1521
                                                     </td>
                                                 </tr>
                                         
                                                 <tr>
                                                     <td>
                                                         500 Evo - Multi Air
                                                     </td>
                                                     <td>
                                                         1521
                                                     </td>
                                                 </tr>
                                         
                                                 <tr>
                                                     <td>
                                                         Dobló - Dobló Cargo
                                                     </td>
                                                     <td>
                                                         1521
                                                     </td>
                                                 </tr>
                                         
                                                 <tr>
                                                     <td>
                                                         Qubo
                                                     </td>
                                                     <td>
                                                         1521
                                                     </td>
                                                 </tr>
                                         
                                                 <tr>
                                                     <td>
                                                         Stilo - Punto 1.8 8V
                                                     </td>
                                                     <td>
                                                         1521
                                                     </td>
                                                 </tr>
                                         
                                                 <tr>
                                                     <td>
                                                         Punto 1.4 - 1.6
                                                     </td>
                                                     <td>
                                                         1521
                                                     </td>
                                                 </tr>
                                         
                                                 <tr>
                                                     <td>
                                                         Palio - Siena - Weekend - Idea - Strada
                                                     </td>
                                                     <td>
                                                         1521
                                                     </td>
                                                 </tr>
                                         
                                                 <tr>
                                                     <td>
                                                         Nuevo Uno
                                                     </td>
                                                     <td>
                                                         1521
                                                     </td>
                                                 </tr>
                                         
                                                 <tr>
                                                     <td>
                                                         Uno - Fiorino 1.3 8V Fire
                                                     </td>
                                                     <td>
                                                         1521
                                                     </td>
                                                 </tr>
                                         
                                             </tbody>
                                         </table>
                                     </div>
                                 </div>

                                 <div class="at2 col-md-6 col-sm-6 col-xs-12 ">
                                        <div class="table-responsive">
                                            <table class="table">
                                            <thead>
                                             
                                                 <tr><th colspan="2">
                                                     Alineado, rotación y balanceo
                                                 </th>
                                             </tr>
                                             </thead>
                                             
                                                     <tbody><tr>
                                                         <td>
                                                             Bravo
                                                         </td>
                                                         <td>
                                                             970
                                                         </td>
                                                     </tr>
                                             
                                                     <tr>
                                                         <td>
                                                             Línea 1.8 - 1.9
                                                         </td>
                                                         <td>
                                                             970
                                                         </td>
                                                     </tr>
                                             
                                                     <tr>
                                                         <td>
                                                             500 Evo - Multi Air
                                                         </td>
                                                         <td>
                                                             970
                                                         </td>
                                                     </tr>
                                             
                                                     <tr>
                                                         <td>
                                                             Dobló - Dobló Cargo
                                                         </td>
                                                         <td>
                                                             970
                                                         </td>
                                                     </tr>
                                             
                                                     <tr>
                                                         <td>
                                                             Qubo
                                                         </td>
                                                         <td>
                                                             970
                                                         </td>
                                                     </tr>
                                             
                                                     <tr>
                                                         <td>
                                                             Stilo - Punto 1.8 8V
                                                         </td>
                                                         <td>
                                                             970
                                                         </td>
                                                     </tr>
                                             
                                                     <tr>
                                                         <td>
                                                             Punto 1.4 - 1.6
                                                         </td>
                                                         <td>
                                                             970
                                                         </td>
                                                     </tr>
                                             
                                                     <tr>
                                                         <td>
                                                             Palio - Siena - Weekend - Idea - Strada
                                                         </td>
                                                         <td>
                                                             970
                                                         </td>
                                                     </tr>
                                             
                                                     <tr>
                                                         <td>
                                                             Nuevo Uno
                                                         </td>
                                                         <td>
                                                             970
                                                         </td>
                                                     </tr>
                                             
                                                     <tr>
                                                         <td>
                                                             Uno - Fiorino 1.3 8V Fire
                                                         </td>
                                                         <td>
                                                             970
                                                         </td>
                                                     </tr>
                                             
                                                     <tr>
                                                         <td>
                                                             500L 1.4 16V
                                                         </td>
                                                         <td>
                                                             970
                                                         </td>
                                                     </tr>
                                             
                                                     <tr>
                                                         <td>
                                                             Mobi 1.0 8V
                                                         </td>
                                                         <td>
                                                             970
                                                         </td>
                                                     </tr>
                                             
                                                     <tr>
                                                         <td>
                                                             Toro 2.0 MJT
                                                         </td>
                                                         <td>
                                                             1140
                                                         </td>
                                                     </tr>
                                             
                                                     <tr>
                                                         <td>
                                                             Argo
                                                         </td>
                                                         <td>
                                                             970
                                                         </td>
                                                     </tr>
                                             
                                                     <tr>
                                                         <td>
                                                             Cronos
                                                         </td>
                                                         <td>
                                                             970
                                                         </td>
                                                     </tr>
                                             
                                                 </tbody>
                                             </table>
                                         </div>
                                     </div>

                                     <div class="at2 col-md-6 col-sm-6 col-xs-12 ">
                                            <div class="table-responsive">
                                                <table class="table">
                                                <thead>
                                                 
                                                     <tr><th colspan="2">
                                                         Distribución
                                                     </th>
                                                 </tr>
                                                 </thead>
                                                 
                                                         <tbody><tr>
                                                             <td>
                                                                 2.0 MJT
                                                             </td>
                                                             <td>
                                                                 7473
                                                             </td>
                                                         </tr>
                                                 
                                                         <tr>
                                                             <td>
                                                                 2.3 JTD
                                                             </td>
                                                             <td>
                                                                 10869
                                                             </td>
                                                         </tr>
                                                 
                                                         <tr>
                                                             <td>
                                                                 1.0 8V
                                                             </td>
                                                             <td>
                                                                 4957
                                                             </td>
                                                         </tr>
                                                 
                                                         <tr>
                                                             <td>
                                                                 1.4 Fire y 1.4 Evo
                                                             </td>
                                                             <td>
                                                                 5208
                                                             </td>
                                                         </tr>
                                                 
                                                         <tr>
                                                             <td>
                                                                 1.8 Nafta discontinuado
                                                             </td>
                                                             <td>
                                                                 10142
                                                             </td>
                                                         </tr>
                                                 
                                                         <tr>
                                                             <td>
                                                                 1.3 Fire
                                                             </td>
                                                             <td>
                                                                 4806
                                                             </td>
                                                         </tr>
                                                 
                                                         <tr>
                                                             <td>
                                                                 1.7 TD discontinuado
                                                             </td>
                                                             <td>
                                                                 7506
                                                             </td>
                                                         </tr>
                                                 
                                                         <tr>
                                                             <td>
                                                                 1.4 Qubo
                                                             </td>
                                                             <td>
                                                                 4594
                                                             </td>
                                                         </tr>
                                                 
                                                         <tr>
                                                             <td>
                                                                 1.9 16v Torque
                                                             </td>
                                                             <td>
                                                                 8726
                                                             </td>
                                                         </tr>
                                                 
                                                         <tr>
                                                             <td>
                                                                 1.4 Multi Air
                                                             </td>
                                                             <td>
                                                                 6257
                                                             </td>
                                                         </tr>
                                                 
                                                         <tr>
                                                             <td>
                                                                 1.4 Fire 16v
                                                             </td>
                                                             <td>
                                                                 5834
                                                             </td>
                                                         </tr>
                                                 
                                                     </tbody>
                                                 </table>
                                             </div>
                                         </div>

                                         <div class="at2 col-md-6 col-sm-6 col-xs-12 ">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                    <thead>
                                                     
                                                         <tr><th colspan="2">
                                                             Instalación Cubre Carter
                                                         </th>
                                                     </tr>
                                                     </thead>
                                                     
                                                             <tbody><tr>
                                                                 <td>
                                                                     Mobi 1.0 8V
                                                                 </td>
                                                                 <td>
                                                                     2194
                                                                 </td>
                                                             </tr>
                                                     
                                                             <tr>
                                                                 <td>
                                                                     Bravo 1.4
                                                                 </td>
                                                                 <td>
                                                                     2342
                                                                 </td>
                                                             </tr>
                                                     
                                                             <tr>
                                                                 <td>
                                                                     Qubo 1.4
                                                                 </td>
                                                                 <td>
                                                                     2742
                                                                 </td>
                                                             </tr>
                                                     
                                                             <tr>
                                                                 <td>
                                                                     Palio 1.4 / Siena 1.1 (Fire)
                                                                 </td>
                                                                 <td>
                                                                     2016
                                                                 </td>
                                                             </tr>
                                                     
                                                             <tr>
                                                                 <td>
                                                                     Nuevo Uno 1.4
                                                                 </td>
                                                                 <td>
                                                                     2194
                                                                 </td>
                                                             </tr>
                                                     
                                                             <tr>
                                                                 <td>
                                                                     Nuevo Palio 326 1.4
                                                                 </td>
                                                                 <td>
                                                                     2110
                                                                 </td>
                                                             </tr>
                                                     
                                                             <tr>
                                                                 <td>
                                                                     500 L 1.4 16V
                                                                 </td>
                                                                 <td>
                                                                     2579
                                                                 </td>
                                                             </tr>
                                                     
                                                             <tr>
                                                                 <td>
                                                                     Nuevo Palio 326 1.6 16V
                                                                 </td>
                                                                 <td>
                                                                     2110
                                                                 </td>
                                                             </tr>
                                                     
                                                             <tr>
                                                                 <td>
                                                                     Argo/Cronos 1.3
                                                                 </td>
                                                                 <td>
                                                                     2900
                                                                 </td>
                                                             </tr>
                                                     
                                                             <tr>
                                                                 <td>
                                                                     Argo/Cronos 1.8
                                                                 </td>
                                                                 <td>
                                                                     2850
                                                                 </td>
                                                             </tr>
                                                     
                                                             <tr>
                                                                 <td>
                                                                     Precio con mano de obra incluida 
                                                                 </td>
                                                                 <td>
                                                                     0
                                                                 </td>
                                                             </tr>
                                                     
                                                         </tbody>
                                                     </table>
                                                 </div>
                                             </div>

                                             <div class="at2 col-md-6 col-sm-6 col-xs-12 ">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                        <thead>
                                                         
                                                             <tr><th colspan="2">
                                                                 Instalación alarma
                                                             </th>
                                                         </tr>
                                                         </thead>
                                                         
                                                                 <tbody><tr>
                                                                     <td>
                                                                         Palio 1.4/Siena 1.4 (fire)
                                                                     </td>
                                                                     <td>
                                                                         3549
                                                                     </td>
                                                                 </tr>
                                                         
                                                                 <tr>
                                                                     <td>
                                                                         Nuevo Siena 1.4
                                                                     </td>
                                                                     <td>
                                                                         3549
                                                                     </td>
                                                                 </tr>
                                                         
                                                                 <tr>
                                                                     <td>
                                                                         Strada Working 1.4 mpi 8v
                                                                     </td>
                                                                     <td>
                                                                         3549
                                                                     </td>
                                                                 </tr>
                                                         
                                                 
                                                             </tbody>
                                                         </table>
                                                     </div>
                                                 </div>

        </div> <!-- fin del div row2 -->
</div> <!-- fin div container -->
</section>
<!-- End about-video Area -->


<!-- Start home-about Area -->
<section class="home-about-area section-gap">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-6 home-about-left">
                <img class="mx-auto d-block img-fluid" src="{{asset('img/recall.jpg')}}" alt="">
                <br>
                <p>
                <b> -¿Cómo se contacta a los clientes afectados por un recall?</b> <br>
                Se les envía una carta a su domicilio, se les envía a un mail a su casilla de correo electrónico y también se publican avisos en los diarios. ¿Por qué? Porque muchas veces los autos cambian de dueños y las marcas y los concesionarios no tienen contacto con el nuevo titular. El recall publicado en un diario permite tener un alcance y una difusión mayor de la campaña.
                </p>

                <p>
                <b>-¿De qué manera la marca sabe cuándo se completó un recall? </b> <br>
                Por medio de los módulos de la computadora que tiene cada auto, se lo conecta a un escáner y se obtiene todo el historial de reparaciones de ese vehículo. De esa manera, si un auto ingresa al taller para realizar la reparación sobre determinado recall, el sistema también revisa si esa unidad tiene pendientes campañas de reparación anteriores. Parte del servicio periódico de mantenimiento que se realizan con los autos de los clientes en los concesionarios consiste en saber si esa unidad cumplió con todos los recalls que pudo haber tenido a lo largo de su vida útil. 
                </p>

                <p>
                <b>-Si el dueño de un auto tiene dudas sobre posibles recalls para su unidad, de los cuales no se haya enterado, ¿qué debe hacer? </b> <br>
                Debe concurrir al concesionario oficial más cercano y solicitar un informe sobre las campañas de recalls que se realizaron para modelos como el suyo. En el concesionario le pedirán el número de chasis de la unidad, también llamado Número de VIN, y con sólo cargarlo en la computadora se sabrá si ese auto tiene alguna campaña pendiente. Tanto la consulta como la reparación programada que se realiza son sin cargo para el cliente.    
                </p>
                
            </div>
            
            <div class="col-lg-6 home-about-right">
                <h6 class="text-uppercase">RECALL</h6>
                <h1>Todo lo que tenes que saber si tu vehículo está comprendido entre los que deben hacerlo</h1>

                <p>
                <b>-¿Qué es un recall? </b> <br>
                Un recall es un llamado a revisión de una unidad –sin importar su antigüedad- para prevenir problemas causados por el desgaste prematuro o una falla en los controles de calidad de alguna pieza del vehículo.
                </p>

                <p>
                <b> -¿Los recalls se realizan sobre cualquier tipo de falla detectada?</b> <br>
                Sí, pero especialmente estos llamados se hacen con las piezas que puedan afectar a la seguridad del vehículo.    
                </p>

                <p>
                <b> -¿Los recalls tienen algún costo para el cliente? </b> <br>
                No, siempre son gratuitos. Y no tienen vencimiento: una vez que se inicia una campaña de recall, no finaliza hasta que se repararon todas las unidades afectadas.
                </p>

                <p>
                <b> -¿El recall varía en función de si está vigente o no la garantía del vehículo? </b> <br>
                No, no tienen ninguna relación. Si se determina que se debe realizar una reparación, sin importar la antigüedad o el kilometraje de la unidad, se hace el recall de manera gratuita.
                </p>


            </div>
        
        </div>
    </div>
</section>
<!-- End home-about Area -->



@endsection
