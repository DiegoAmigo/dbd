<?php

use Illuminate\Database\Seeder;

class paqueteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Paquete', 30)->create();
    }
}
