<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = "ciudades";
    protected $primaryKey = 'id_ciudad';

    protected $fillable = [
        'ciudad'
       
   ];

   public function ciudad_cliente()
   {
       return $this->hasMany('App\Cliente',"id_ciudad");
   }





}
