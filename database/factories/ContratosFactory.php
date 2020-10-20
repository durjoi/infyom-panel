<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contratos;
use Faker\Generator as Faker;

$factory->define(Contratos::class, function (Faker $faker) {

    return [
        'contrato_numero' => $faker->word,
        'contrato_tipo' => $faker->word,
        'data_inicio' => $faker->word,
        'data_termino' => $faker->word,
        'fatork' => $faker->word,
        'operacao' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_empresa' => $faker->word,
        'id_cidade' => $faker->word,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
