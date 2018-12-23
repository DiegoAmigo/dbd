<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nombre_ciudad' => $faker->city,
		'id_pais' => $faker->numberBetween($min = 0, $max = 100000)
    ];
});
