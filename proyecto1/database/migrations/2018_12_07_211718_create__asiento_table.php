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
        Schema::create('asiento', function (Blueprint $table) {
            $table->increments('id_asiento');
            $table->integer('numero_asiento');
            $table->char('letra_asiento',1);
            $table->integer('id_clase');
            $table->integer('id_avion');
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
        Schema::dropIfExists('asiento');
    }
}
