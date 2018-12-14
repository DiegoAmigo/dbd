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
        Schema::create('transporte', function (Blueprint $table) {
            $table->increments('patente');
            $table->integer('tipo_transporte');
            $table->float('monto');
            $table->string('empresa_transporte', 32);
            $table->float('precio_total');
            $table->integer('capacidad_transporte');
            $table->string('pais', 28);
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
        Schema::dropIfExists('transporte');
    }
}
