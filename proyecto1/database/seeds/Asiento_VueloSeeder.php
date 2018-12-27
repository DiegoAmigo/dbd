<?php

use Illuminate\Database\Seeder;

class Asiento_VueloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Asiento_Vuelo', 30)->create();
    }
}
