<?php

use Faker\Generator as Faker;

$factory->define(App\Transporte::class, function (Faker $faker) {
    return [
    	'patente' => str_random(7),
        'tipo_transporte' => $faker->numberBetween(1,5),
        'monto' => $faker->numberBetween(100,1000),
        'empresa_transporte' => str_random(32),
        'precio_total' => $faker->numberBetween(100,1000),
        'capacidad_transporte' => $faker->numberBetween(1,8),
        'id_ciudad' => $faker->numberBetween($min = 1, $max = 30)
    ];
});
