<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nombre_hotel' => $faker->text($maxNbChars = 28),
		'monto' => $faker->numberBetween($min = 100000, $max = 1000000),
		'id_ciudad' => $faker->numberBetween($min = 0, $max = 100000),
		'direccion_hotel' => $faker->streetAddress,
		'cantidad_estrellas' => $faker->numberBetween($min = 0, $max = 5)
    ];
});