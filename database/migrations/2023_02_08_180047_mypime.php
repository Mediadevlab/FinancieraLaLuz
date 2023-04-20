<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mypime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mypime', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('prestamo_id') -> constrained('prestamo');
            $table->string('nombre');
            $table->string('dni');
            $table->string('rtn');
            $table->string('tel_cel');
            $table->string('tel_casa');
            $table->string('tel_tra');
            $table->string('dir_casa');
            $table->string('dir_mypime');
            $table->string('fecha_nac');
            $table->string('ciudad');
            $table->string('correo');
            $table->string('foto');
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
