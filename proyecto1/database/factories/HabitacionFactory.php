<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
     return [
        'capacidad_habitacion' => $faker->numberBetween($min = 0, $max = 10),
		'disponibilidad_habitacion' => $faker->numberBetween($min = 0, $max = 1),
		'numero_habitacion' => $faker->numberBetween($min = 0, $max = 100),
		'id_hotel' => $faker->numberBetween($min = 0, $max = 100000)
    ];
});