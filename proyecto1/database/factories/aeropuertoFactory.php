<?php

use Faker\Generator as Faker;

$factory->define(App\Aeropuerto::class, function (Faker $faker) {
    return [
        'nombre_aeropuerto' => str_random(32),
        'capacidad_aviones' => $faker->numberBetween(1,100),
        'id_ciudad' => $faker->numberBetween(1,10)
    ];
});
