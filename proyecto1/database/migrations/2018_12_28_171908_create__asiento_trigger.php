<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsientoTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        /*
        DB::unprepared('
        CREATE TRIGGER asiento_trigger AFTER INSERT ON avions FOR EACH ROW
        BEGIN
         INSERT INTO asientos (numero_asiento, letra_asiento, id_clase, id_avion) VALUES (1,1,1, NEW.id );
        END
        ');

        */
        /*
		DB::statement(*//*'
        CREATE OR REPLACE FUNCTION AsingAsiento()
        RETURNS trigger AS
        $$
        BEGIN           
            UPDATE asientos
            SET id = 1
            WHERE asientos.id_avion = NEW.id_avion;
            RETURN NEW;
        END
        $$ LANGUAGE plpgsql;
        ');

        DB::unprepared('
        CREATE TRIGGER user_role AFTER INSERT ON asientos FOR EACH ROW
        EXECUTE PROCEDURE AsingAsiento();
        '*/
		'CREATE OR REPLACE FUNCTION AsingAsiento()
            RETURNS TRIGGER AS 
            $$
            DECLARE
                id_avi int;
				id_cl int;
            BEGIN
                id_avi = (
                    SELECT asi.id_avion 
                    FROM asientos asi, avions avi
                    WHERE asi.id_avion = avi.id AND asi.id = NEW.id
                    );
				id_cl = (
                    SELECT asi.id_clase 
                    FROM asientos asi, clases cl
                    WHERE asi.id_avion = id_avi AND asi.id_clase = cl.id AND asi.id = NEW.id
                    );	
                INSERT INTO asientos (numero_asiento, letra_asiento, id_clase, id_avion)
                VALUES (NEW.numero_asiento, NEW.letra_asiento, id_cl, id_avi);
                RETURN NULL;
			END
				$$ LANGUAGE plpgsql;
        ');

        DB::unprepared('
        CREATE TRIGGER asiento_asignado AFTER INSERT ON asientos FOR EACH ROW
        EXECUTE PROCEDURE AsingAsiento();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        Schema::dropIfExists('_asiento_trigger');
        */
    }
}
