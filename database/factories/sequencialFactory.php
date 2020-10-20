<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\sequencial;
use Faker\Generator as Faker;

$factory->define(sequencial::class, function (Faker $faker) {

    return [
        'protocolo' => $faker->randomDigitNotNull,
        'entrada' => $faker->randomDigitNotNull,
        'saida' => $faker->randomDigitNotNull,
        'poste_numero' => $faker->randomDigitNotNull,
        'obras' => $faker->randomDigitNotNull,
        'eventos' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
