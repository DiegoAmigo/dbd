<?php

use Illuminate\Database\Seeder;

class pasajeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Pasajero', 30)->create();
    }
}
