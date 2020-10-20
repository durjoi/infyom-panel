<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Estoque_saida;
use Faker\Generator as Faker;

$factory->define(Estoque_saida::class, function (Faker $faker) {

    return [
        'solicitante' => $faker->word,
        'autorizado_por' => $faker->word,
        'actualizacao' => $faker->word,
        'observacao' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_operacao' => $faker->randomDigitNotNull,
        'id_obras_estoque' => $faker->randomDigitNotNull,
        'id_bairro' => $faker->randomDigitNotNull,
        'id_turma' => $faker->randomDigitNotNull,
        'id_cidade' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
