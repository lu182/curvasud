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

    public function turno_cliente()
    {
        return $this->belongsTo('App\Turno',"id_cliente"); //El cliente pertenece a un turno 
    }

    public function vehiculos_cliente()
    {
        return $this->hasMany('App\Vehiculo',"id_cliente"); //El cliente puede tener muchos vehiculos
    }

    public function tipodoc_cliente()
    {
        return $this->belongsTo('App\TipoDocumento',"id_tipo_doc"); //El cliente pertenece a un tipo de doc 
    }

    public function ciudad_cliente()
    {
        return $this->belongsTo('App\Ciudad',"id_ciudad"); //El cliente pertenece a una ciudad 
    }

    public function cliente_orden()
    {
        return $this->belongsTo('App\OrdenReparacion',"id_cliente"); //El cliente pertenece a una orden de reparacion 
    }


}
