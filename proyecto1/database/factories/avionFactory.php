<?php

use Faker\Generator as Faker;

$factory->define(App\Avion::class, function (Faker $faker) {
    return [
        'marca' => str_random(15),
        'modelo' => str_random(15),
        'capacidad_a' => $faker->numberBetween(1,100)
    ];
});
