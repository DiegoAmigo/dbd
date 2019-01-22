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
            $table->integer('numero_documento')->unique();
            $table->string('nombre_cliente',60);
            $table->string('apellido_cliente',35);
            $table->string('email',60)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->date('fecha_nacimiento');
            $table->string('password');
            $table->integer('puntos_millas');
            $table->unsignedInteger('id_pais');
            $table->rememberToken();
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
