<?php

use Faker\Generator as Faker;

$factory->define(App\Vuelo::class, function (Faker $faker) {
    return [
        'hora_fin' => $faker->time($format = 'H:i:s', $max = 'now'),
        'hora_inicio' => $faker->time($format = 'H:i:s', $max = 'now'),
        'cupos_disponibles' => $faker->numberBetween(10,500),
        'disponible_vuelo' => $faker->numberBetween(0,1),
        'atraso' => $faker->boolean
    ];
});
