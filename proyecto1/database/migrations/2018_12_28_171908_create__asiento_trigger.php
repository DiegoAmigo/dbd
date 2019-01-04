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



        DB::statement(
		'CREATE OR REPLACE FUNCTION AsingAsiento()
            RETURNS TRIGGER AS 
            $$
            DECLARE
                num int;
				id_cl int;
            BEGIN
                num = (
                    SELECT random() * 10 + 1
                    
                    );
					
                INSERT INTO asientos (numero_asiento, letra_asiento, id_clase, id_avion)
                VALUES (num, 0, 1, NEW.id);
                RETURN NULL;
			END
				$$ LANGUAGE plpgsql;
        ');

        DB::unprepared('
        CREATE TRIGGER asiento_asignado AFTER INSERT ON avions FOR EACH ROW
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
