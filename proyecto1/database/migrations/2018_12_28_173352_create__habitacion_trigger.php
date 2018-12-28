<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        CREATE OR REPLACE FUNCTION AsingHabitacion()
        RETURNS trigger AS
        $$
        BEGIN           
            UPDATE habitacions
            SET id = 1
            WHERE habitacions.id_hotel = NEW.id_hotel;
            RETURN NEW;
        END
        $$ LANGUAGE plpgsql;
        ');

        DB::unprepared('
        CREATE TRIGGER asing_room AFTER INSERT ON habitacions FOR EACH ROW
        EXECUTE PROCEDURE AsingHabitacion();
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_habitacion_trigger');
    }
}
