<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEmpleado extends Model
{
    protected $table = "tipos_empleados";
    protected $primaryKey = 'id_tipo_empleado';

    protected $fillable = [
        'id_tipo_empleado', 'tipo_empleado',
   ];

   public function empleados()
   {
       return $this->hasMany('App\Empleado',"id_tipo_empleado");
   }


}
