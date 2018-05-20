@extends('comunes.headerdashboard')


@section("content")
<div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title">Listado de Turnos</h4>
                <p class="card-category">Estos son los turnos cargados en el sistema</p>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Salary</th>
                        <th>Country</th>
                        <th>City</th>
                    </tr></thead>
                    <tbody>
                        <tr>
                            <td>Dakota Rice</td>
                            <td>$36,738</td>
                            <td>Niger</td>
                            <td>Oud-Turnhout</td>
                        </tr>
                        <tr>
                            <td>Minerva Hooper</td>
                            <td>$23,789</td>
                            <td>Curaçao</td>
                            <td>Sinaai-Waas</td>
                        </tr>
                        <tr>
                            <td>Sage Rodriguez</td>
                            <td>$56,142</td>
                            <td>Netherlands</td>
                            <td>Baileux</td>
                        </tr>
                        <tr>
                            <td>Philip Chaney</td>
                            <td>$38,735</td>
                            <td>Korea, South</td>
                            <td>Overland Park</td>
                        </tr>
                        <tr>
                            <td>Doris Greene</td>
                            <td>$63,542</td>
                            <td>Malawi</td>
                            <td>Feldkirchen in Kärnten</td>
                        </tr>
                        <tr>
                            <td>Mason Porter</td>
                            <td>$78,615</td>
                            <td>Chile</td>
                            <td>Gloucester</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
                



    @endsection









