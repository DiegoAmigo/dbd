<?php

use Faker\Generator as Faker;

$factory->define(App\Aerolinea::class, function (Faker $faker) {
    return [
        'nombre_aero' => str_random(60)
    ];
});
