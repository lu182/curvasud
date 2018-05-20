@extends('comunes.headerdashboard')


@section("content")

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Bievenido {{ Auth::user()->name }}</h4>
                                    <p class="card-category">Gracias por elegir Curvasud</p>
                                </div>
                                <div class="card-body ">
                                </div>
                                <div class="card-footer ">
                                  
                                </div>
                            </div>
                        </div>

                        <div style="margin:auto;text-align:center;width:80%">

                        <h3> Tus próximos Turnos </h3s>
                        <div class="container-fluid">
                                <div class="card " style="min-width: 900px">

                                <div class="row">
                                    <div class="col-lg-4">
                                            <div class="card-header ">
                                                <h4 class="card-title">Jueves 25/05</h4>
                                                <p class="card-category">Día</p>
                                            </div>
                                         
                                        </div>

                                        <div class="col-lg-4">
                                                <div class="card-header ">
                                                    <h4 class="card-title">18:30</h4>
                                                    <p class="card-category">Hora</p>
                                                </div>
                                              
                                            </div>

                                            <div class="col-lg-4">
                                                    <div class="card-header ">
                                                        <h4 class="card-title">Service 10000 km.</h4>
                                                        <p class="card-category">Tipo de Servicio</p>
                                                    </div>
                                                 
                                                </div>

                                    </div>
                    
                                            <button style="margin-top:5%"  class="btn btn-primary btn-lg"> Cambiar </button>
                                            <button style="margin-top:5%" class="btn btn-danger btn-lg"> Cancelar </button>

                                                                               
                                </div>

    @endsection