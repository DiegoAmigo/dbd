<?php

use Faker\Generator as Faker;

$factory->define(App\Asiento::class, function (Faker $faker) {
    return [
        'numero_asiento' => $faker->numberBetween(1,100),
        'letra_asiento' => $faker->randomLetter,
        'id_clase' => $faker->numberBetween(1,100),
        'id_avion' => $faker->numberBetween(1,100)
    ];
});
