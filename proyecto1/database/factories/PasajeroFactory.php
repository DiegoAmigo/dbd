<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'tipo_documento' => $faker->text($maxNbChars = 32),
		'fecha_nac_p' => $faker->text($maxNbChars = 100),
		'nombre_pasajero' => $faker->text($maxNbChars = 100),
		'apellido_pasajero' => $faker->text($maxNbChars = 100),
		'asistencia especial' => $faker->text($maxNbChars = 100),
		'id_pais' => $faker->text($maxNbChars = 100)
    ];
});
