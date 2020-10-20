<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\medidor;
use Faker\Generator as Faker;

$factory->define(medidor::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'numero' => $faker->word,
        'idlogradouro' => $faker->randomDigitNotNull,
        'idbairro' => $faker->randomDigitNotNull,
        'poste_numero' => $faker->word,
        'contrato' => $faker->word,
        'capacidade_medicao' => $faker->word,
        'capacidade_disjuntor' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
