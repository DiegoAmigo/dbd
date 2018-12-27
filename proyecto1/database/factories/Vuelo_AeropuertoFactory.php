<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'id_vuelo' => $faker->numberBetween($min = 1, $max = 30),
        'id_aeropuerto' => $faker->numberBetween($min = 1, $max = 30),
		'origen' => $faker->boolean
    ];
});
