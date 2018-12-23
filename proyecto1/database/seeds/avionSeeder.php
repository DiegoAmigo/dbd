<?php

use Illuminate\Database\Seeder;

class avionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Avion', 30)->create();
    }
}
