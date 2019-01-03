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
                id_hot int;
            BEGIN
                id_hot = (
                    SELECT hab.id_hotel 
                    FROM habitacions hab, hotels hot
                    WHERE hab.id_hotel = hot.id AND hab.id = NEW.id
                    limit 5);	
                INSERT INTO habitacions (capacidad_habitacion, monto, disponilibidad_habitacion, numero_habitacion, id_hotel)
                VALUES (NEW.capacidad_habitacion, NEW.monto, NEW.disponilibidad_habitacion, NEW.numero_habitacion, id_hot);
                RETURN NULL;
			END
				$$ LANGUAGE plpgsql;
        ');

        DB::unprepared('
        CREATE TRIGGER habitacion_asignada AFTER INSERT ON habitacions FOR EACH ROW
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
