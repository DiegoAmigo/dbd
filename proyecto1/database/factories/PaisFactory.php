<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nombre_pais' => $faker->text($maxNbChars = 28)
    ];
});
