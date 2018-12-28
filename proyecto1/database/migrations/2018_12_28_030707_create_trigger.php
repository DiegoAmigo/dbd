<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration
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
            UPDATE users
            SET rol_id = 1
            WHERE users.id = NEW.id;
            RETURN NEW;
        END
        $$ LANGUAGE plpgsql;
        ');

        DB::unprepared('
        CREATE TRIGGER user_role AFTER INSERT ON users FOR EACH ROW
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
        Schema::dropIfExists('_trigger');
    }
}
