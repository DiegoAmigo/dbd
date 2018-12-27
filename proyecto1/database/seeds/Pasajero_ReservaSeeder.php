<?php

use Illuminate\Database\Seeder;

class Pasajero_ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Pasajero_Reserva', 30)->create();
    }
}
