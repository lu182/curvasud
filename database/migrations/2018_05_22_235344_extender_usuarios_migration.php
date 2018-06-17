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
      
        });

        Schema::table('vehiculos', function (Blueprint $table) {
       
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
