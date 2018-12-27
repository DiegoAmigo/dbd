<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'id_vuelo' => $faker->numberBetween($min = 1, $max = 30),
        'id_asiento' => $faker->numberBetween($min = 1, $max = 30),
		'disponible_asiento' => $faker->boolean
    ];
});
