<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $table = "turnos";
    protected $primaryKey = 'id_turno';
    public $timestamps = false;


    protected $fillable = [
        'id_turno', 'id_cliente', 'id_estado_turno', 'id_tipo_servicio', 'fecha', 'hora'
   ];

   public function tipo()
   {
       return $this->belongsTo('App\TipoServicio',"id_tipo_servicio");
   }


}
