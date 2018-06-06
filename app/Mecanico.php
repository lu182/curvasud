<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mecanico extends Model
{
    protected $table = "mecanicos";
    protected $primaryKey = 'id_mecanico';
    public $timestamps = false;

    protected $fillable = [
        'id_mecanico', 'nombre', 'apellido','email','dni',
        'id_tipo_doc','fecha_nac','domicilio','cod_postal','telefono','id_ciudad'];


        public function ciudad(){
            return $this->belongsTo("App\Ciudad","id_ciudad");
        }

        public function tipoDoc(){
            return $this->belongsTo("App\TipoDocumento","id_tipo_doc");
        }












}
