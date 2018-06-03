<h1> Orden de Reparación </h1>


<h3> Fecha de Ingreso {{$fecha_ingreso}} </h3>
<h3> Fecha estimada de Egreso {{$fecha_estimada_egreso}} </h3>


<h2>Cliente </h2>
<h3> Nombre: {{$cliente->nombre}} </h3>
<h3> Apellido: {{$cliente->apellido}} </h3>
<h3> DNI: {{$cliente->dni}} </h3>
<h3> Email: {{$cliente->email}} </h3>

</h2> Detalles del vehiculo </h2>

<h3> Marca: {{$vehiculo->marca}} </h3>
<h3> Modelo: {{$vehiculo->modelo}} </h3>
<h3> Patente: {{$vehiculo->patente}} </h3>
<h3> Número de Chasis: {{$vehiculo->nro_chasis}} </h3>

</h2> Motivo de Ingreso: </h2>
<h3> {{$motivo_ingreso}} </h3>

</h2> Observaciones: </h2>
<h3> {{$observaciones}} </h3>

</h2> Operación Realizada: </h2>
<h3> {{$operacion_realizada}} </h3>

</h2> Extra: </h2>
<h3> {{$extra}} </h3>

</h2> Km: </h2>
<h3> {{$km}} </h3>

