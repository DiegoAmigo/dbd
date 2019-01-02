<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VueloAeropuerto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelo_aeropuertos', function (Blueprint $table) {
            //en caso de
            $table->increments('id');
            $table->unsignedInteger('id_aero');
            $table->unsignedInteger('id_vuelo');
            $table->boolean('origen');
            $table->timestamps();

            $table->foreign('id_aero')
                ->references('id')
                ->on('aeropuertos')
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
        Schema::dropIfExists('vuelo_aeropuertos');
    }
}
