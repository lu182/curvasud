<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',"tipo_user_id", 'id_tipo_doc',
        'id_ciudad',
        'dni',
        'nombre',
        'apellido',
        'fecha_nac',
        'razon_social',
        'domicilio',
        'cod_postal',
        'telefono',
        'cuil'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function vehiculo()
    {
        return $this->hasMany('App\Vehiculo',"id_cliente");
    }

    public function turnos()
    {
        return $this->hasMany('App\Turno',"id_cliente");
    }

    public function ciudad()
    {
        return $this->belongsTo('App\Ciudad',"id_ciudad");
    }

    public function tipo_documento(){
        return $this->belongsTo("App\TipoDocumento","id_tipo_doc");
    }

    public function turnos_cancelados()
    {
        return $this->hasMany('App\Turno',"id_cliente")->where("id_estado_turno",3)->orderBy('id_turno', 'desc');
    }

    public function usuario_ordenes(){
        return $this->hasMany("App\OrdenReparacion","id_cliente");
    }

   

  
}
