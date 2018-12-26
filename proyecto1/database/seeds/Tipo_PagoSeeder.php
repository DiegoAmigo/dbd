<?php

use Illuminate\Database\Seeder;

class Tipo_PagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Tipo_Pago',4)->create();
    }
}
