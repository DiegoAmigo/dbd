<?php

use Faker\Generator as Faker;

$factory->define(App\Ciudad::class, function (Faker $faker) {
    return [
        'nombre_ciudad' => $faker->city,
		'id_pais' => $faker->numberBetween($min = 1, $max = 30)
    ];
});
