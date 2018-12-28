<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVueloTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        CREATE OR REPLACE FUNCTION AsingVuelo()
        RETURNS trigger AS
        $$
        BEGIN           
            UPDATE vuelos
            SET id = 1
            WHERE vuelos.id_aerolinea = NEW.id_aerolinea;
            RETURN NEW;
        END
        $$ LANGUAGE plpgsql;
        ');

        DB::unprepared('
        CREATE TRIGGER asing_fly AFTER INSERT ON vuelos FOR EACH ROW
        EXECUTE PROCEDURE AsingVuelo();
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_vuelo_trigger');
    }
}
