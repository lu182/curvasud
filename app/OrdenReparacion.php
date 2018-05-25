<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenReparacion extends Model
{
    protected $table = "ordenes_reparacion";
    protected $primaryKey = 'id_orden_reparacion';

    protected $fillable = [
        'id_cliente', 'id_empleado', 'id_estado_orden', 'fecha_ingreso_vehiculo',
        'fecha_egreso_vehiculo'
    ];

    public function estado_ordenes()
    {
        return $this->belongsTo('App\EstadoOrden',"id_estado_orden"); 
    }

    public function detalle_ordenes()
    {
        return $this->belongsTo('App\DetalleOrden',"id_orden_reparacion"); 
    }

    public function orden_cliente()
    {
        return $this->belongsTo('App\Cliente',"id_cliente");
    }

    public function orden_empleado()
    {
        return $this->belongsTo('App\Empleado',"id_empleado");
    }



}
