<?php

use Faker\Generator as Faker;

$factory->define(App\reserva::class, function (Faker $faker) {
    return [
    	'checkin' => $faker->randomElement($array = array(true,false)),
    	'pagado' => $faker->randomElement($array = array(true,false)),
        'total_reserva' => $faker->randomElement($array = array(1100000,2500000,890000,450000,730000,320000)),
        'correo_reserva' => str_random(60).'@gmail.com',
        'telefono_reserva' => $faker->phoneNumber
    ];
});
