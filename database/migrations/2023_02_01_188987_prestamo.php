<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prestamo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('prestamo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo');
            $table->string('tipo');
            $table->string('capital');
            $table->string('tipo_tasa');
            $table->string('cuota');
            $table->string('interes');
            $table->string('total');
            $table->string('plazo');
            $table->string('forma_pago');
            $table->string('fecha_solicitud');
            $table->string('fecha_inicio');
            $table->string('fecha_fin');
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
