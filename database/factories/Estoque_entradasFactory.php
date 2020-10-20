<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Estoque_entradas;
use Faker\Generator as Faker;

$factory->define(Estoque_entradas::class, function (Faker $faker) {

    return [
        'data_operacao' => $faker->word,
        'numero_nf' => $faker->randomDigitNotNull,
        'numero_rm' => $faker->randomDigitNotNull,
        'observacao' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_operacao' => $faker->randomDigitNotNull,
        'id_fornecedor' => $faker->randomDigitNotNull,
        'id_obras_estoque' => $faker->randomDigitNotNull,
        'id_cidade' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
