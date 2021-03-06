<?php

use Faker\Generator as Faker;

$factory->define(App\Asiento_Reservado::class, function (Faker $faker) {
    return [
        'id_reserva' => $faker->numberBetween($min = 1, $max = 30),
        'id_asiento' => $faker->numberBetween($min = 1, $max = 30)
    ];
});
