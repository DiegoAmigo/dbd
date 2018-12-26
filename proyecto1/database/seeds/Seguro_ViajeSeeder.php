<?php

use Illuminate\Database\Seeder;

class Seguro_ViajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Seguro_Viaje',20)->create();
    }
}
