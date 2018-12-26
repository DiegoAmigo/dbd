<?php

use Faker\Generator as Faker;

$factory->define(App\Boleta::class, function (Faker $faker) {
    return [
        'monto_total' => $faker->numberBetween(100000,3000000),
        'fecha_pago' => $faker->date,
        'id_reserva' => $faker->numberBetween(1,30),
        'id_tipo_pago' => $faker->numberBetween(1,4)
    ];
});
