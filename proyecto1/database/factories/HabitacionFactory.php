<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
     return [
        'capacidad_habitacion' => $faker->text($maxNbChars = 32),
		'disponibilidad_habitacion' => $faker->text($maxNbChars = 100),
		'numero_habitacion' => $faker->text($maxNbChars = 100),
		'id_hotel' => $faker->text($maxNbChars = 100)
    ];
});
