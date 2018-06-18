<style>

        table, th, td {
            border: 1px solid black;
         }
</style>
<h2>Vehículos registrados según tipo de servicio</h2>

        @foreach ($tipos as $key => $tipo)
    @if($tipo->tiposervicio_turno->count() > 0)
        <h2> Tipo de Servicio: {{$tipo->tipoServicio}} </h2>

             <table class="table display" id="tabla" cellspacing="5" >
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col" style="text-align:center">Marca</th>
                            <th scope="col" style="text-align:center">Tipo de vehículo</th>
                            <th scope="col" style="text-align:center">Modelo</th>
                            <th scope="col" style="text-align:center">Año</th>
                            <th scope="col" style="text-align:center">Patente</th>
                            <th scope="col" style="text-align:center">N° chasis</th>
                            <th scope="col" style="text-align:center">Fecha inicio garantía</th>

                          </tr>
                        </thead>
                        <tbody>
                  
                       
                     
                      
                   
            @foreach ($tipo->tiposervicio_turno as  $turno)
                <tr>
                    <th scope="row" style="text-align:center"></th>
                    <th scope="row" style="text-align:center"></th>
                    <th scope="row" style="text-align:center"></th>
                    <th scope="row" style="text-align:center"></th>
                    <th scope="row" style="text-align:center"></th>
                    <th scope="row" style="text-align:center"></th>
                    <th scope="row" style="text-align:center"></th>
                </tr>
  

            @endforeach
        </tbody>
    </table>
    @endif
        @endforeach

            