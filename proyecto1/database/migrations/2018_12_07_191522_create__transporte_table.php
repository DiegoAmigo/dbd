<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportes', function (Blueprint $table) {
            $table->increments('id');
            $table->char('patente',8);
            $table->integer('tipo_transporte');
            $table->integer('monto');
            $table->string('empresa_transporte', 32);
            $table->integer('precio_total');
            $table->unsignedInteger('id_ciudad');
            $table->integer('capacidad_transporte');
            $table->timestamps();

            $table->foreign('id_ciudad')
                ->references('id')
                ->on('ciudads')
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
        Schema::dropIfExists('transportes');
    }
}
