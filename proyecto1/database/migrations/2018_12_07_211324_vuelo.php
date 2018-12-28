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
            $table->time('hora_fin');
            $table->time('hora_inicio');
            $table->integer('cupos_disponibles');
            $table->integer('disponible_vuelo');
            $table->boolean('atraso');
			$table->unsignedInteger('id_aerolinea');
			
			$table->foreign('id_aerolinea')
                ->references('id')
                ->on('aerolineas')
                ->onDelete('cascade');
				
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
        Schema::dropIfExists('vuelos');
    }
}
