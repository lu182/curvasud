<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = "vehiculos";
    protected $primaryKey = 'id_vehiculo';
    public $timestamps = false;

    protected $fillable = ["id_vehiculo",
"id_tipo_vehiculo",
"marca",
"modelo",
"anio",
"patente",
"nro_chasis",
"fecha_inicio_garantia",
"user_id",
"id_cliente",
   ];

   public function user()
   {
       return $this->belongsTo('App\User',"id_cliente");
   }
}
