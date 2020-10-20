<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\logradouro;
use Faker\Generator as Faker;

$factory->define(logradouro::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'logradouro_codigo' => $faker->randomDigitNotNull,
        'logradouro_codigodiv' => $faker->randomDigitNotNull,
        'idlogradourotipo' => $faker->randomDigitNotNull,
        'logradouro_titulo' => $faker->word,
        'logradouro_preposicao' => $faker->word,
        'logradouro_descricao' => $faker->word,
        'logradouro_conjunto' => $faker->word,
        'logradouro_cep' => $faker->word,
        'logradouro_estado' => $faker->word,
        'idbairro' => $faker->randomDigitNotNull,
        'trafego_pedestres' => $faker->word,
        'trafego_veiculos' => $faker->word,
        'importancia_via' => $faker->word,
        'arborizacao' => $faker->word,
        'idempresa' => $faker->randomDigitNotNull,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
