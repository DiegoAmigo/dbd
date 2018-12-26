<?php

use Faker\Generator as Faker;

$factory->define(App\Reserva::class, function (Faker $faker) {
    return [
    	'checkin' => $faker->randomElement($array = array(true,false)),
    	'pagado' => $faker->randomElement($array = array(true,false)),
        'total_reserva' => $faker->randomElement($array = array(1100000,2500000,890000,450000,730000,320000)),
        'correo_reserva' => $faker->email,
        'telefono_reserva' => $faker->phoneNumber,
        'id_cliente' => $faker->numberBetween(1,30),
        'id_habitacion' => $faker->numberBetween(1,30),
        'fecha_inicio_h' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'fecha_fin_h' => $faker->date($format = 'Y-m-d', $max = '+30 years'),
        'id_paquete' => $faker->numberBetween(1,30),
        'id_transporte' => $faker->numberBetween(1,30),
        'fecha_i_t' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'fecha_f_t' => $faker->date($format = 'Y-m-d', $max = '+30 years'),
        'id_seguro' => $faker->numberBetween(1,3),
        'tipo_reserva' => $faker->numberBetween(1,4)
    ];
});
