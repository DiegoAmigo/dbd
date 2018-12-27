<?php

use Illuminate\Database\Seeder;

class Vuelo_ReservadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Vuelo_Reservado', 30)->create();
    }
}
