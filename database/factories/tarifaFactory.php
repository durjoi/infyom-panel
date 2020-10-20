<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tarifa;
use Faker\Generator as Faker;

$factory->define(tarifa::class, function (Faker $faker) {

    return [
        'tipo' => $faker->word,
        'idmeses' => $faker->randomDigitNotNull,
        'ano_referencia' => $faker->randomDigitNotNull,
        'valor' => $faker->word,
        'aliquota' => $faker->word,
        'resolucao_annel' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
