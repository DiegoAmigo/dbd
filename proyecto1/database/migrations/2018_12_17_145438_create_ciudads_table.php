<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_ciudad', 58);
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
        Schema::dropIfExists('ciudads');
    }
}
