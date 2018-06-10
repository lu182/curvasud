<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleOrden extends Model
{
    protected $table = "detalles_ordenes_reparacion";
    protected $primaryKey = 'id_detalle_orden';
    public $timestamps = false;

    protected $fillable = [
        'id_orden_reparacion', 'kilometraje', 'motivo_ingreso', 'observaciones', 'extra', 'mecanico','operacion_realizada'
    ];

    public function detalle_ordenes()
    {
        return $this->hasMany('App\OrdenReparacion',"id_orden_reparacion");
    }


}
