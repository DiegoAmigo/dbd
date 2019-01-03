<?php

use Faker\Generator as Faker;

$factory->define(App\Vuelo_Reservado::class, function (Faker $faker) {
    return [
        'id_vuelo' => $faker->numberBetween($min = 1, $max = 30),
        'id_reserva' => $faker->numberBetween($min = 1, $max = 30)
    ];
});
