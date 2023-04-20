<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cliente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('fechaNac');
            $table->string('dni');
            $table->string('rtn');
            $table->string('telefono');
            $table->string('trabajo');
            $table->string('tel_trabajo');
            $table->string('direccion');
            $table->string('dir_trabajo');
            $table->string('correo');
            $table->string('estado');
            $table->string('nom_aval');
            $table->string('dni_aval');
            $table->string('rtn_aval');
            $table->string('dir_aval');
            $table->string('dirTrabajo_aval');
            $table->string('telTrabajo_aval');
            $table->string('telCasa_aval');
            $table->string('fechaNac_aval');
            $table->string('croquis_casa');
            $table->string('croquis_trabajo');
            $table->string('foto_cliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
