<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoOrden extends Model
{
    protected $table = "estados_ordenes";
    protected $primaryKey = 'id_estado_orden';

    protected $fillable = [
        'estadoOrden'
    ];

    public function estados_orden()
    {
        return $this->hasMany('App\OrdenReparacion',"id_estado_orden");
    }




}
