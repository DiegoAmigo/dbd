<?php

use Illuminate\Database\Seeder;

class Vuelo_AeropuertoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Vuelo_Aeropuerto', 30)->create();
    }
}
