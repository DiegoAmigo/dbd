<?php

use Faker\Generator as Faker;

$factory->define(App\Vuelo::class, function (Faker $faker) {
    return [
    	'fecha_salida' => $faker->date($format = 'Y-m-d'),
        'hora_fin' => $faker->time($format = 'H:i:s', $max = 'now'),
        'hora_inicio' => $faker->time($format = 'H:i:s', $max = 'now'),
        'cupos_disponibles' => $faker->numberBetween(10,500),
        'disponible_vuelo' => $faker->boolean,
        'atraso' => $faker->boolean,
        'id_aerolinea' => $faker->numberBetween(1,20)
    ];
});
