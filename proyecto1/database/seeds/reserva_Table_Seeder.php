<?php

use Illuminate\Database\Seeder;
class reserva_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Reserva', 30)->create();
    }
}
