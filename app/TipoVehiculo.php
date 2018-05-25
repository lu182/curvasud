<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    protected $table = "tipos_vehiculos";
    protected $primaryKey = 'id_tipo_vehiculo';
    protected $fillable = [
        'tipoVehiculo'
   ];

   public function tipovehiculo_vehiculo()
   {
       return $this->hasMany('App\Vehiculo',"id_tipo_vehiculo");
   }
}
