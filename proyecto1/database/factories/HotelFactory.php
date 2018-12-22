<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nombre_hotel' => $faker->text($maxNbChars = 28),
		'monto' => $faker->text($maxNbChars = 28),
		'id_ciudad' => $faker->text($maxNbChars = 28),
		'direccion_hotel' => $faker->text($maxNbChars = 28),
		'cantidad_estrellas' => $faker->text($maxNbChars = 28),
		'id_ciudad' => $faker->text($maxNbChars = 28)
    ];
});
