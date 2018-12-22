<?php

use Faker\Generator as Faker;

$factory->define(App\Vuelo::class, function (Faker $faker) {
    return [
        'hora_fin' => $faker->time($format = 'H:i:s', $max = 'now'),
        'hora_inicio' => $faker->time($format = 'H:i:s', $max = 'now')
    ];
});
