<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VueloReservado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelo_reservados', function (Blueprint $table) {
            //en caso de
            $table->increments('id');
            $table->unsignedInteger('id_reserva');
            $table->unsignedInteger('id_vuelo');
            $table->timestamps();

            $table->foreign('id_reserva')
                ->references('id')
                ->on('reservas')
                ->onDelete('cascade');

            $table->foreign('id_vuelo')
                ->references('id')
                ->on('vuelos')
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
        Schema::dropIfExists('vuelo_reservados');
    }
}
