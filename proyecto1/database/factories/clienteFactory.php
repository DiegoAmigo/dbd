<?php

use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'numero_documento' => $faker->numberBetween(1,24000000),
        'tipo_doc' => $faker->numberBetween(1,2),
        'nombre_cl' => $faker->firstName($gender = null),
        'apellido_cl' => $faker->lastName,
        'correo_cl' => $faker->email,
        'fecha_nac' => $faker->dateTimeBetween($startDate = '-80 years', $endDate = 'now', $timezone = null),
        'contrasena' => $faker->password,
        'puntos_milla' => $faker->numberBetween(1,100),
        'id_pais' => $faker->numberBetween(1,30)
    ];
});
