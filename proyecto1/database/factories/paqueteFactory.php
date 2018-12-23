<?php

use Faker\Generator as Faker;

$factory->define(App\Paquete::class, function (Faker $faker) {
    return [
        'cupos' => $faker->numberBetween(1,1000),
        'cantidad_dias' => $faker->numberBetween(1,10),
        'cantidad_noches' => $faker->numberBetween(1,10),
    ];
});
