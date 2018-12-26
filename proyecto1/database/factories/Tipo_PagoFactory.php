<?php

use Faker\Generator as Faker;

$factory->define(App\Tipo_Pago::class, function (Faker $faker) {
    return [
        'nombre_tipo' => $faker->text($maxNbChars = 32),
		'detalle_pago' => $faker->text($maxNbChars = 100)
    ];
});
