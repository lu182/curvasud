<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoTurno extends Model
{
    protected $table = "estados_turnos";
    protected $primaryKey = 'id_estado_turno';
    
    protected $fillable = [
       'estadoTurno' 
   ];

   public function estadoturno_turno()
   {
       return $this->hasMany('App\Turno',"id_estado_turno");
   }



}
