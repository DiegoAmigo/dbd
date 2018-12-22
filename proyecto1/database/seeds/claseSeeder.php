<?php

use Illuminate\Database\Seeder;

class claseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Clase', 30)->create();
    }
}
