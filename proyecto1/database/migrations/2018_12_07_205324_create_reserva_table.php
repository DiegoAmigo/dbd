<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_reserva');
            $table->boolean('checkin');
            $table->boolean('pagado');
            $table->integer('total_reserva');
            $table->string('correo_cliente',60);
            $table->string('telefono_cliente');
            $table->unsignedInteger('id_paquete')->nullable();
            $table->unsignedInteger('id_cliente')->nullable();
            $table->unsignedInteger('id_seguro')->nullable();
            $table->unsignedInteger('id_transporte')->nullable();
            $table->date('fecha_i_t')->nullable();
            $table->date('fecha_f_t')->nullable();
            //segun yo deberia ser alverre
            $table->unsignedInteger('id_habitacion')->nullable();
            $table->date('fecha_inicio_h')->nullable();
            $table->date('fecha_fin_h')->nullable();
            $table->date('id_destino')->nullable();
            $table->date('codigo')->nullable();
            
            $table->timestamps();

            $table->foreign('id_cliente')
                ->references('id')
                ->on('clientes')
                ->onDelete('cascade');

            $table->foreign('id_seguro')
                ->references('id')
                ->on('seguro_viajes')
                ->onDelete('cascade');

            $table->foreign('id_transporte')
                ->references('id')
                ->on('transportes')
                ->onDelete('cascade');

            $table->foreign('id_paquete')
                ->references('id')
                ->on('paquetes')
                ->onDelete('cascade');

            $table->foreign('id_habitacion')
                ->references('id')
                ->on('habitacions')
                ->onDelete('cascade');

            $table->foreign('id_destino')
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
        Schema::dropIfExists('reservas');
    }
}
