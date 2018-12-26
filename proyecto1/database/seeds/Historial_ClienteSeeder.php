<?php

use Illuminate\Database\Seeder;

class Historial_ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Historial_Cliente',20)->create();
    }
}
