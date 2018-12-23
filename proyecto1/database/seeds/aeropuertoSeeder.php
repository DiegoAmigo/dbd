<?php

use Illuminate\Database\Seeder;

class aeropuertoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Aeropuerto', 30)->create();
    }
}
