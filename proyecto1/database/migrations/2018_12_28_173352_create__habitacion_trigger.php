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
            RETURNS TRIGGER AS 
            $$
            DECLARE
                cap int;
                num int;
            BEGIN
                cap = (
                    SELECT random() * 10 + 1
                    );	
                num = (
                    SELECT random() * 10 + 1
                    );  
                INSERT INTO habitacions (capacidad_habitacion, monto, disponibilidad_habitacion, numero_habitacion, id_hotel)
                VALUES (cap, 100, true, num, NEW.id);
                RETURN NULL;
			END
				$$ LANGUAGE plpgsql;
        ');

        DB::unprepared('
        CREATE TRIGGER habitacion_asignada AFTER INSERT ON hotels FOR EACH ROW
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
        /*
        Schema::dropIfExists('_habitacion_trigger');
        */
    }
}
