<?php

use Faker\Generator as Faker;

$factory->define(App\Clase::class, function (Faker $faker) {
    return [
        'tipo_clase' => $faker->numberBetween(1,100),
        'descrpcion_clase' => str_random(100)
    ];
});
