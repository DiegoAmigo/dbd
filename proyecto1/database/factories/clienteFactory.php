<?php

use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'tipo_documento' => $faker->numberBetween(1,2),
        'nombre_cl' => $faker->firstName($gender = null),
        'apellido_cl' => $faker->lastName,
        'e-mail' => $faker->email,
        'fecha_nac' => $faker->dateTimeBetween($startDate = '-80 years', $endDate = 'now', $timezone = null),
        'contrasena' => $faker->password,
        'puntos_millas' => $faker->numberBetween(1,100),
        'id_pais' => $faker->numberBetween(1,30)
    ];
});
