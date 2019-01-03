<?php

use Faker\Generator as Faker;

$factory->define(App\Pasajero_Reserva::class, function (Faker $faker) {
    return [
        'id_pasajero' => $faker->numberBetween($min = 1, $max = 30),
        'id_reserva' => $faker->numberBetween($min = 1, $max = 30)
    ];
});
