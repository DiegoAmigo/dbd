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
		DB::statement('
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
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_asiento_trigger');
    }
}
