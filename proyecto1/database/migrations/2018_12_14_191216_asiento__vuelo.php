<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AsientoVuelo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asiento_vuelos', function (Blueprint $table) {
            //en caso de
            $table->increments('id');
            $table->unsignedInteger('id_vuelo');
            $table->unsignedInteger('id_asiento');
            $table->integer('disponible_Asiento');
            $table->timestamps();

            $table->foreign('id_vuelo')
                ->references('id')
                ->on('vuelos')
                ->onDelete('cascade');
            $table->foreign('id_asiento')
                ->references('id')
                ->on('asientos')
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
        Schema::dropIfExists('asiento_vuelos');
    }
}
