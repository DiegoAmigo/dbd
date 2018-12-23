<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'id_cliente' => $faker->numberBetween($min = 0, $max = 100000),
		'id_tipo_pago' => $faker->numberBetween($min = 0, $max = 100000)
    ];
});
