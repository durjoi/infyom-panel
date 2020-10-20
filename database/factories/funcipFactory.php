<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\funcip;
use Faker\Generator as Faker;

$factory->define(funcip::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'ano' => $faker->randomDigitNotNull,
        'idmeses' => $faker->randomDigitNotNull,
        'modulo' => $faker->word,
        'valor_estimado_pagamento' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
