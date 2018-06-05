@extends('comunes.headerdashboard')


@section("content")

<div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">REGISTRAR MECÁNICO</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Usuario </label>
                                <input type="text" class="form-control"  placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-md-5 px-1">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Apellido</label>
                                <input type="text" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>DNI</label>
                                <input type="number" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                           <label for="">Tipo de documento</label>
                            <select id="" class="form-control">
                              <option selected>DNI</option>
                              <option>LE</option>
                              <option>Pasaporte</option>
                            </select>
                        </div> 
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>Fecha de nacimiento</label>
                                <input type="date" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-md-5 pl-1">
                            <div class="form-group">
                                <label>Razón Social</label>
                                <input type="text" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                    
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Domicilio</label>
                                <input type="text" class="form-control" placeholder="Domicilio" value="">
                            </div>
                        </div>
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label>Cód.Postal</label>
                                <input type="number" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input type="text" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                       <div class="form-group col-md-4">
                            <label for="">Ciudad</label>
                             <select id="" class="form-control">
                               <option selected>Córdoba</option>
                               <option>Villa María</option>
                               <option>Rio cuarto</option>
                               <option>Jesús María</option>
                               <option>Alta Gracia</option>
                               <option>Dean Funes</option>
                               <option>La Falda</option>
                               <option>Capilla del monte</option>
                               <option>Rio ceballos</option>
                               <option>Agua de oro</option>
                               <option>Otro..</option>
                             </select>
                        </div>
                   
                    <button type="submit" class="btn btn-info btn-fill pull-right">REGISTRAR</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

    @endsection