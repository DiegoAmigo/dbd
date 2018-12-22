<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'fecha' => $faker->text($maxNbChars = 32),
		'id_cliente' => $faker->text($maxNbChars = 100),
		'id_tipo_pago' => $faker->text($maxNbChars = 100)
    ];
});
