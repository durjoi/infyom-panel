<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Estoque_entradas_produto;
use Faker\Generator as Faker;

$factory->define(Estoque_entradas_produto::class, function (Faker $faker) {

    return [
        'quantidade' => $faker->word,
        'dev_mat_novo_def' => $faker->word,
        'dev_mat_n_apl' => $faker->word,
        'dev_mat_apl' => $faker->word,
        'valor_unitario' => $faker->word,
        'valor_total' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_entrada' => $faker->randomDigitNotNull,
        'id_producto' => $faker->randomDigitNotNull,
        'id_cidade' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
