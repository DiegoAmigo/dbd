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
            $table->increments('id_cliente');
            $table->integer('numero_documento');
            $table->integer('tipo_doc');
            $table->string('nombre_cl',60);
            $table->string('apellido',35);
            $table->string('correo_cl',60);
            $table->date('fecha_nac');
            $table->char('contrasena',32);
            $table->integer('puntos_milla');
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
        Schema::dropIfExists('clientes');
    }
}
