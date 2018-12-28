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
<<<<<<< HEAD
            $table->unsignedInteger('id_aerolinea');
=======
			$table->unsignedInteger('id_aerolinea');
			
			$table->foreign('id_aerolinea')
                ->references('id')
                ->on('aerolineas')
                ->onDelete('cascade');
				
>>>>>>> 72381ccd878373c52b75a68f6e2af6ff4e5c9141
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
