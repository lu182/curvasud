@extends('comunes.headerdashboard')


@section("content")

<h2> CONSULTAS DISPONIBLES PARA EL JEFE DE TALLER</h2>


<ul>

    <li>
        <a href="{{route('/jefetaller/mecanicosRegistrados')}}"> Consultar mecánicos </a>
    </li>

    <li>
            <a href="{{route('/jefetaller/turnosDispYnoDisp')}}">Consultar turnos disponibles y no disponibles</a>
        </li>
        

        <li>
                <a href="{{route('/jefetaller/turnosCanceladosDelDia')}}">Consultar turnos cancelados del dia</a>
            </li>
            

            <li>
                    <a href="{{route('/jefetaller/serviciosRegistrados')}}">Consultar tipos de servicios registrados</a>
                </li>
                

                <li>
                        <a href="{{route('/jefetaller/buscarPorChasis')}}">Buscar clientes por número de chasis</a>
                    </li>
                    

                    <li>
                            <a href="{{route('/jefetaller/vehiculossRegistrados')}}">Consultar vehiculos registrados</a>
                        </li>
                        

                        <li>
                                <a href="{{route('/jefetaller/buscarVehiculosPorModelo')}}">Consultar vehiculos por modelo</a>
                            </li>
                            

                    <li>
                            <a href="{{route('/jefetaller/consultarordenCliente')}}">Consultar ordenes de reparacion ingresadas, por cliente</a>
                        </li>

                        <li>
                                <a href="{{route('/jefetaller/mostrarOrdenPorChasis')}}">Consultar órdenes de reparacion por número de chasis</a>
                            </li>

                            
                    
</ul>



@endsection