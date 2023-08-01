<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cobro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('total_cobro');
            $table->string('fecha_cobro');
            $table->string('foto_comprobante')->nullable();
            $table->string('num_recibo');
            $table->timestamps();

            //Relación tabla prestamo - cobro
            $table->foreignId('id_prestamo')
                    ->nullable()
                    ->constrained('prestamo')
                    ->cascadeOnUpdate()
                    ->nullOnDelete();
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
