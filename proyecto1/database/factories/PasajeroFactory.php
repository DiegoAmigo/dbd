<?php

use Faker\Generator as Faker;

$factory->define(App\Pasajero::class, function (Faker $faker) {
    return [
        'tipo_documento' => $faker->numberBetween($min = 0, $max = 2),
        'numero_documento' => $faker->numberBetween(1,25000000),
		'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'nombre_pasajero' => $faker->firstName(),
		'apellido_pasajero' => $faker->lastName,
		'asistencia_especial' => $faker->boolean,
		'id_pais' => $faker->numberBetween($min = 1, $max = 30)
    ];
});
