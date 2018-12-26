<?php

use Faker\Generator as Faker;

$factory->define(App\Pasajero::class, function (Faker $faker) {
    return [
        'tipo_documento_p' => $faker->numberBetween(1,2),
        'numero_documento' => $faker->numberBetween(1,25000000),
        'nombre_p' => $faker->firstName(),
        'apellido_p' => $faker->lastName,
        'asistencia_especial' => $faker->boolean,
        'id_pais' => $faker->numberBetween($min = 1, $max = 30)
    ];
});
