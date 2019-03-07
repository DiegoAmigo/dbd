<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vuelo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_salida');
            $table->time('hora_fin');
            $table->time('hora_inicio');
            $table->integer('cupos_disponibles');
            $table->boolean('disponible_vuelo');
            $table->boolean('atraso');
			$table->unsignedInteger('id_aerolinea');
            $table->timestamps();

            $table->foreign('id_aerolinea')
                ->references('id')
                ->on('aerolineas')
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
        Schema::dropIfExists('vuelos');
    }
}
