<?php

use Illuminate\Database\Seeder;

class boletaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Boleta', 30)->create();
    }
}
