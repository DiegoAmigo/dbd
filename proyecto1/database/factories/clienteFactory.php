<?php

use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'tipo_documento' => $faker->numberBetween(1,2),
        'numero_documento' => $faker->numberBetween(1,24000000),
        'nombre_cliente' => $faker->firstName($gender = null),
        'apellido_cliente' => $faker->lastName,
        'email' => $faker->email,
        'email_verified_at' => now(),
        'fecha_nacimiento' => $faker->dateTimeBetween($startDate = '-80 years', $endDate = 'now', $timezone = null),
        'password' => $faker->password,
        'puntos_millas' => $faker->numberBetween(1,100),
        'id_pais' => $faker->numberBetween(1,30),
        'remember_token' => str_random(10),
    ];
});
