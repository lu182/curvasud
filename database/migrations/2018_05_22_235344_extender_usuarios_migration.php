<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtenderUsuariosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('id_tipo_doc');
            $table->foreign('id_tipo_doc')->references('id_tipo_doc')->on('tipos_documentos');
            $table->integer('id_ciudad');
            $table->foreign('id_ciudad')->references('id_ciudad')->on('ciudades');
            $table->integer('dni');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('fecha_nac');
            $table->string('razon_social');
            $table->string('domicilio');
            $table->integer('cod_postal');
            $table->string('telefono');
            $table->integer('id_tipo_empleado')->nullable();
            $table->foreign('id_tipo_empleado')->references('id_tipo_empleado')->on('tipos_empleados');
            $table->string('cuil')->nullable();
        });

        Schema::table('vehiculos', function (Blueprint $table) {
            $table->integer('id_cliente');
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
        });
    }

    /**
     * ->nullable()
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
