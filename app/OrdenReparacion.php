<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenReparacion extends Model
{
    protected $table = "ordenes_reparacion";
    protected $primaryKey = 'id_orden_reparacion';
    public $timestamps = false;

    protected $fillable = [
        'id_cliente', 'id_empleado', 'id_estado_orden', 'fecha_ingreso_vehiculo',
        'fecha_egreso_vehiculo', 'id_mecanico',"id_vehiculo","id_cliente"
    ];

    public function estado_ordenes()
    {
        return $this->belongsTo('App\EstadoOrden', "id_estado_orden");
    }

    public function detalle_ordenes()
    {
        return $this->hasMany('App\DetalleOrden', "id_orden_reparacion");
    }


    public function orden_mecanico()
    {
        return $this->belongsTo('App\Mecanico', "id_mecanico");
    }

    public function orden_usuario()
    {
        return $this->belongsTo('App\User', "id_cliente");
    }

    
    public function orden_vehiculo()
    {
        return $this->belongsTo('App\Vehiculo', "id_vehiculo");
    }

    public function corregirFecha1()
    {
      
        $fecha_ingreso_vehiculo = strtotime($this->fecha_ingreso_vehiculo);
        $fecha_ingreso_vehiculo = date('d-m-Y', $fecha_ingreso_vehiculo);
        return $fecha_ingreso_vehiculo;
    }

    public function corregirFecha2()
    {
        $fecha_egreso_vehiculo = strtotime($this->fecha_egreso_vehiculo);
        $fecha_egreso_vehiculo = date('d-m-Y', $fecha_egreso_vehiculo);
        return $fecha_egreso_vehiculo;
    }

}
