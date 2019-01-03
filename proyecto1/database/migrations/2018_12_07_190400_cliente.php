<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_documento');
            $table->integer('numero_documento');
            $table->string('nombre_cliente',60);
            $table->string('apellido_cliente',35);
            $table->string('correo_cliente',60);
            $table->date('fecha_nacimiento');
            $table->char('contrasena',32);
            $table->integer('puntos_millas');
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
        Schema::dropIfExists('clientes');
    }
}
