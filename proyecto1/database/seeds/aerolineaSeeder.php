<?php

use Illuminate\Database\Seeder;

class aerolineaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Aerolinea', 30)->create();
    }
}
