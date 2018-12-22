<?php

use Illuminate\Database\Seeder;

class Tipo_AccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('\App\Tipo_Accion',20)->create();
    }
}
