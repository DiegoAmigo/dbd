<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AvionAeropuerto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avion_aeropuertos', function (Blueprint $table) {
            //en caso de
            $table->increments('id');
            $table->unsignedInteger('id_aeropuerto');
            $table->unsignedInteger('id_vuelo');
            $table->timestamps();

            $table->foreign('id_aeropuerto')
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
        Schema::dropIfExists('avion_aeropuertos');
    }
}
