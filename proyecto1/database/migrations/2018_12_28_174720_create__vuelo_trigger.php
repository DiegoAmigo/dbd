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
        /*
        DB::statement('
        CREATE OR REPLACE FUNCTION AsingVuelos()
            RETURNS TRIGGER AS 
            $$
            DECLARE
                id_aero_des int;
				id_aero_ori int;
            BEGIN
                id_aero_des = (
                    SELECT asi.id_avion 
                    FROM vuelos vue, vuelo_aeropuertos va, aeropuertos aero, aerolineas al
                    WHERE vue.id_aerolinea = al.id AND va.id_vuelo = vue.id AND va.id_aeropuerto = aero.id 
							AND va.origen = false AND vue.id = NEW.id
                    limit 5);
				id_aero_ori = (
                    SELECT asi.id_avion 
                    FROM vuelos vue, vuelo_aeropuertos va, aeropuertos aero, aerolineas al
                    WHERE vue.id_aerolinea = al.id AND va.id_vuelo = vue.id AND va.id_aeropuerto = aero.id 
							AND va.origen = true AND vue.id = NEW.id
                    limit 5);	
                INSERT INTO vuelo_aeropuertos (id_aeropuerto, id_vuelo, origen)
                VALUES (id_aero_des, NEW.id_vuelo, false);
				INSERT INTO vuelo_aeropuertos (id_aeropuerto, id_vuelo, origen)
                VALUES (id_aero_ori, NEW.id_vuelo, true);
                RETURN NULL;
			END
				$$ LANGUAGE plpgsql;
        ');

        DB::unprepared('
        CREATE TRIGGER vuelos_asignados AFTER INSERT ON vuelos FOR EACH ROW
        EXECUTE PROCEDURE AsingVuelos();
        ');
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        Schema::dropIfExists('_vuelo_trigger');
        */
    }
}
