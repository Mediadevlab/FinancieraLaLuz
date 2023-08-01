<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fiduciario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiduciario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('prestamo_id') -> constrained('prestamo');
            $table->string('nombre');
            $table->string('dni');
            $table->string('rtn');
            $table->string('tel_cel');
            $table->string('tel_casa');
            $table->string('tel_tra');
            $table->string('dir_casa');
            $table->string('dir_trabajo');
            $table->string('fecha_nac');
            $table->string('ciudad');
            $table->string('correo');
            $table->string('foto')->nullable();
            $table->string('nombre_aval');
            $table->string('dni_aval');
            $table->string('rtn_aval');
            $table->string('tel_cel_aval');
            $table->string('tel_casa_aval');
            $table->string('tel_tra_aval');
            $table->string('dir_casa_aval');
            $table->string('dir_trabajo_aval');
            $table->string('fecha_nac_aval');
            $table->string('ciudad_aval');
            $table->string('correo_aval');
            $table->string('foto_aval')->nullable();
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
