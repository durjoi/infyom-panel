<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\requisicao;
use Faker\Generator as Faker;

$factory->define(requisicao::class, function (Faker $faker) {

    return [
        'data_operacao' => $faker->word,
        'operacao' => $faker->word,
        'solicitante' => $faker->word,
        'autorizado_por' => $faker->word,
        'obras' => $faker->word,
        'bairro' => $faker->word,
        'turma' => $faker->word,
        'observacao' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
