<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVueloReservadoTrigger extends Migration
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
            UPDATE vuelo_reservados
            SET rol_id = 1
            WHERE vuelo_reservados.id = NEW.id;
            RETURN NEW;
        END
        $$ LANGUAGE plpgsql;
        ');

        DB::unprepared('
        CREATE TRIGGER vuelo_reservados_role AFTER INSERT ON vuelo_reservados FOR EACH ROW
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
        Schema::dropIfExists('_vuelo_reservado_trigger');
    }
}
