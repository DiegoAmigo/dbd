<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'descripcion' => $faker->text($maxNbChars = 32),
		'tipo_plan' => $faker->text($maxNbChars = 100)
    ];
});
