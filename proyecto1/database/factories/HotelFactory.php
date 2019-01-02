<?php

use Faker\Generator as Faker;

$factory->define(App\Hotel::class, function (Faker $faker) {
    return [
        'nombre_hotel' => $faker->text($maxNbChars = 28),
		'id_ciudad' => $faker->numberBetween($min = 1, $max = 30),
		'direccion_hotel' => $faker->streetAddress,
		'cant_estrellas' => $faker->numberBetween($min = 0, $max = 5)
    ];
});
