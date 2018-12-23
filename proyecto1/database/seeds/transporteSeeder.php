<?php

use Illuminate\Database\Seeder;

class transporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Transporte', 30)->create();
    }
}
