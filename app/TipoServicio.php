<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoServicio extends Model
{
    protected $table = "tipos_servicios";
    public $timestamps = false;
    protected $primaryKey = 'id_tipo_servicio';
    protected $fillable = [
        'id_tipo_servicio', 'tipoServicio'
   ];

   public function tiposervicio_turno()
   {
       return $this->hasMany('App\Turno',"id_tipo_servicio");
   }

}
