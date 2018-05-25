<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table = "tipos_documentos";
    protected $primaryKey = 'id_tipo_doc';

    protected $fillable = [
         'id_tipo_doc', 'tipoDocumento'

    ];

    public function tipodoc_clientes()
    {
        return $this->hasMany('App\Cliente',"id_tipo_doc");
    }

    public function tipodoc_empleados()
    {
        return $this->hasMany('App\Empleado',"id_tipo_doc");
    }

}
