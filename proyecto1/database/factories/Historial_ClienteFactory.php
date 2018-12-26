<?php

use Faker\Generator as Faker;

$factory->define(App\Historial_Cliente::class, function (Faker $faker) {
    return [
        'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'id_cliente' => $faker->numberBetween($min = 1, $max = 30),
		'id_tipo_accion' => $faker->numberBetween($min = 1, $max = 4)
    ];
});
