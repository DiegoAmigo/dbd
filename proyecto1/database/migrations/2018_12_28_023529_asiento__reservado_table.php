<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AsientoReservadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asiento_reservados', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_reserva');
			$table->unsignedInteger('id_asiento');
            $table->timestamps();

            $table->foreign('id_reserva')
                ->references('id')
                ->on('reservas')
                ->onDelete('cascade');
				
			$table->foreign('id_asiento')
                ->references('id')
                ->on('hotels')
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
        Schema::dropIfExists('asiento_reservados');
    }
}
