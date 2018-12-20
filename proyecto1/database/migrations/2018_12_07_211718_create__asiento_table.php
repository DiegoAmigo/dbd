<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_asiento');
            $table->char('letra_asiento',1);
            $table->unsignedInteger('id_clase');
            $table->unsignedInteger('id_avion');
            $table->timestamps();

            $table->foreign('id_clase')
                ->references('id')
                ->on('clases')
                ->onDelete('cascade');

            $table->foreign('id_avion')
                ->references('id')
                ->on('avions')
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
        Schema::dropIfExists('asientos');
    }
}
