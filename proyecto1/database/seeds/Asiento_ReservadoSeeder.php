<?php

use Illuminate\Database\Seeder;

class Asiento_ReservadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Asiento_Reservado', 30)->create();
    }
}
