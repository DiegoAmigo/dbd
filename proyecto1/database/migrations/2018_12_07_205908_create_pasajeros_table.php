<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasajerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasajeros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_documento');
            $table->date('fecha_nacimiento');
            $table->integer('tipo_documento');
            $table->string('nombre_pasajero',60);
            $table->string('apellido_pasajero',32);
            $table->boolean('asistencia_especial');
            $table->unsignedInteger('id_pais');
            $table->timestamps();

            $table->foreign('id_pais')
                ->references('id')
                ->on('pais')
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
        Schema::dropIfExists('pasajeros');
    }
}
