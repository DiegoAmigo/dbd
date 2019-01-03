<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_hotel', 30);
            $table->string('direccion_hotel', 80);
            $table->integer('cantidad_estrellas');
            $table->unsignedInteger('id_ciudad');
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
        Schema::dropIfExists('hotels');
    }
}
