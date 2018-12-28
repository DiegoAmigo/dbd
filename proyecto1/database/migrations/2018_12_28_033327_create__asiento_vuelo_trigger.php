<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsientoVueloTrigger extends Migration
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
            UPDATE asiento_vuelo
            SET rol_id = 1
            WHERE asiento_vuelo.id = NEW.id;
            RETURN NEW;
        END
        $$ LANGUAGE plpgsql;
        ');

        DB::unprepared('
        CREATE TRIGGER asiento_vuelo_role AFTER INSERT ON asiento_vuelo FOR EACH ROW
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
        Schema::dropIfExists('_asiento_vuelo_trigger');
    }
}
