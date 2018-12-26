<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoletaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletas', function (Blueprint $table) {
            $table->increments('id');
            $table->float('monto_total');
            $table->date('fecha_pago');
            $table->unsignedInteger('id_tipo_pago');
            $table->unsignedInteger('id_reserva');
            $table->timestamps();
            
            $table->foreign('id_tipo_pago')
                ->references('id')
                ->on('tipo_pagos')
                ->onDelete('cascade');

            $table->foreign('id_reserva')
                ->references('id')
                ->on('reservas')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boletas');
    }
}
