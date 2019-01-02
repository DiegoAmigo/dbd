<?php

use Faker\Generator as Faker;

$factory->define(App\Paquete::class, function (Faker $faker) {
    return [
        'cupos' => $faker->numberBetween(1,1000),
        'cant_dias' => $faker->numberBetween(1,10),
        'cant_noches' => $faker->numberBetween(1,10),
		'id_ciudad' => $faker->numberBetween(1,30)
    ];
});
