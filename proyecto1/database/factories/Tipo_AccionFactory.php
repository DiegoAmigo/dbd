<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'accion' => $faker->text($maxNbChars = 32),
		'descripcion_accion' => $faker->text($maxNbChars = 100)
    ];
});
