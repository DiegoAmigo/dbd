<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvionAeropuertoTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        CREATE OR REPLACE FUNCTION AsingRol()
        RETURNS trigger AS
        $$
        BEGIN           
            UPDATE avion_aeropuertos
            SET rol_id = 1
            WHERE avion_aeropuertos.id = NEW.id;
            RETURN NEW;
        END
        $$ LANGUAGE plpgsql;
        ');

        DB::unprepared('
        CREATE TRIGGER avion_aeropuertos_role AFTER INSERT ON avion_aeropuertos FOR EACH ROW
        EXECUTE PROCEDURE AsingRol();
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_avion_aeropuerto_trigger');
    }
}
