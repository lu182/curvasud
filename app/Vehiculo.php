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

   public function vehiculo_tipoVehiculo()
   {
       return $this->belongsTo('App\TipoVehiculo',"id_tipo_vehiculo"); //El vehiculo pertenece a un tipo de vehiculo
   }

   public function vehiculo_cliente()
   {
       return $this->belongsTo('App\User',"id_cliente"); //El vehiculo pertenece a un cliente
   }





}
