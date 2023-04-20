<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hipotecario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hipotecario', function (Blueprint $table) {
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
            $table->string('foto');
            $table->string('desc_inmueble');
            $table->string('dir_inmueble');
            $table->string('foto_inmueble');
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
