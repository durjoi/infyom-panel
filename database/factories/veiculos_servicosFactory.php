<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\veiculos_servicos;
use Faker\Generator as Faker;

$factory->define(veiculos_servicos::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'idveiculos' => $faker->randomDigitNotNull,
        'data_servico' => $faker->word,
        'descricao_servico' => $faker->word,
        'valor_total' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
