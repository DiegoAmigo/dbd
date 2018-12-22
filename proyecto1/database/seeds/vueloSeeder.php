<?php

use Illuminate\Database\Seeder;

class vueloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Vuelo', 30)->create();
    }
}
