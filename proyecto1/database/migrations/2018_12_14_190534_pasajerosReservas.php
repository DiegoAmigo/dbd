<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PasajerosReservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasajerosReservas', function (Blueprint $table) {
            //en caso de
            $table->increments('id');
            $table->unsignedInteger('numero_documento');
            $table->unsignedInteger('id_reserva');
            $table->timestamps();

            $table->foreign('numero_documento')
                ->references('id')
                ->on('pasajeros')
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
        Schema::dropIfExists('pasajerosReservas');
    }
}
