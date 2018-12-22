<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nombre_ciudad' => $faker->text($maxNbChars = 32),
		'id_pais' => $faker->text($maxNbChars = 100)
    ];
});
