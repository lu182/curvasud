<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
    protected $table = "clientes";

    protected $fillable = [
        'id_tipo_doc', 'id_vehiculo', 'id_ciudad', 'usuario', 'pass',
        'dni','nombre','apellido', 'fecha_nac', 'razon_social', 'domicilio','cod_postal','telefono',
        'email'
        
   ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pass',
    ];

}
