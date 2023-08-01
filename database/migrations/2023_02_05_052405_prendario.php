<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prendario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prendario', function (Blueprint $table) {
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
            $table->string('desc_vehiculo');
            $table->string('placa');
            $table->string('color');
            $table->string('modelo');
            $table->string('marca');
            $table->string('anio');
            $table->string('documentacion');
            $table->string('foto_vehiculo')->nullable();
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
