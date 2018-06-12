@extends('comunes.headerdashboard')


@section("content")

<div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Actualizar mis datos</h4>

                @if($errors->any())

                <div class="alert alert-success">{{$errors->first()}}</div>

            @endif

            </div>
            <div class="card-body">
                <form method="post" action ="">
                    @csrf
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Usuario </label>
                                <input type="text" class="form-control"  placeholder="" value=" {{ Auth::user()->name }}" name="name">
                            </div>
                        </div>
                        <div class="col-md-5 px-1">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="" value="{{ Auth::user()->email }}" name= "email">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="" value="{{ Auth::user()->nombre }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Apellido</label>
                                <input type="text" class="form-control" placeholder="" value="{{ Auth::user()->apellido }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>DNI</label>
                                <input type="number" class="form-control" placeholder="" value="{{ Auth::user()->dni }}" readonly>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                           <label for="">Tipo de documento</label>
                           <input type="text" class="form-control" placeholder="" value="{{ Auth::user()->tipo_documento->tipoDocumento }}" readonly>

                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>Fecha de nacimiento</label>
                                <input type="date" class="form-control" placeholder="" value="{{ Auth::user()->fecha_nac }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-5 pl-1">
                            <div class="form-group">
                                <label>Razón Social</label>
                                <input type="text" class="form-control" placeholder="" value="{{ Auth::user()->razon_social }}" name= "razon_social">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Domicilio</label>
                                <input type="text" class="form-control" placeholder="Domicilio" value="{{ Auth::user()->domicilio }}" name= "domicilio">
                            </div>
                        </div>
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label>Cód.Postal</label>
                                <input type="number" class="form-control" placeholder="" value="{{ Auth::user()->cod_postal }}" name= "cod_postal">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input type="text" class="form-control" placeholder="" value="{{ Auth::user()->telefono }}" name= "telefono">
                            </div>
                        </div>
                       <div class="form-group col-md-4">
                            <label for="">Ciudad</label>
                             <select id="selector_ciudad" class="form-control" name = "id_ciudad">
                                    <option value="{{ Auth::user()->ciudad->id_ciudad }}" selected> {{ Auth::user()->ciudad->ciudad }}</option>

                                 @foreach ($ciudades as $ciudad)

                                 @if($ciudad->ciudad == Auth::user()->ciudad->ciudad)

                                 @else
                                 <option value="{{$ciudad->id_ciudad}}" >{{$ciudad->ciudad}}</option>
                                @endif
                                 @endforeach
                                 <option value="0" >Otra</option>

                             </select>
                        </div>

                        <div class="col-md-4 px-1">
                                <div class="form-group" id="ciudad_input">
                                    <label>Ingrese nombre de ciudad</label>
                                    <input type="text" class="form-control" placeholder="" name = "inputOtro" >
                                </div>
                            </div>

                    <button type="submit" class="btn btn-info btn-fill pull-right">ACTUALIZAR MIS DATOS</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

    @endsection
