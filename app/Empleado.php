<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "empleados";
    protected $primaryKey = 'id_empleado';

    protected $fillable = [
         'id_tipo_empleado', 'id_tipo_doc', 'usuario', 'pass', 'nombre', 'apellido',
         'dni', 'cuil', 'domicilio', 'fecha_nac', 'telefono', 'email' 

    ];

    public function tipo_empleado()
    {
        return $this->belongsTo('App\TipoEmpleado',"id_tipo_empleado");
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pass',
    ];
}
