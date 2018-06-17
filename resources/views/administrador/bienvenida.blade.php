@extends('comunes.headerdashboard')


@section("content")

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-header ">
                                    <h3 class="card-title">Bienvenido Administrador {{ Auth::user()->nombre }} {{ Auth::user()->apellido }}</h3>
                                    <p class="card-category">Gracias por elegir Curvasud</p>
                                </div>
                                <div class="card-body ">
                                </div>
                                <div class="card-footer ">
                                  
                                </div>
                            </div>
                        </div>

                        

                        
                             

    @endsection


