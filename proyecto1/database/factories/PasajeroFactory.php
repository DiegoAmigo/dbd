<?php

use Faker\Generator as Faker;

$factory->define(App\Pasajero::class, function (Faker $faker) {
    return [
        'tipo_documento' => $faker->numberBetween($min = 0, $max = 2),
		'fecha_nac_p' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'nombre_pasajero' => $faker->text($maxNbChars = 60),
		'apellido_pasajero' => $faker->text($maxNbChars = 32),
		'asistencia especial' => $faker->numberBetween($min = 0, $max = 1),
		'id_pais' => $faker->numberBetween($min = 1, $max = 30)
    ];
});
