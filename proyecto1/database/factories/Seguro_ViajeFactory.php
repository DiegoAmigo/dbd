<?php

use Faker\Generator as Faker;

$factory->define(App\Seguro_Viaje::class, function (Faker $faker) {
    return [
        'descripcion' => $faker->text($maxNbChars = 100),
		'tipo_plan' => $faker->numberBetween($min = 0, $max = 10)
    ];
});
