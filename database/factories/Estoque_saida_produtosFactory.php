<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Estoque_saida_produtos;
use Faker\Generator as Faker;

$factory->define(Estoque_saida_produtos::class, function (Faker $faker) {

    return [
        'quantidade' => $faker->word,
        'valor_unitario' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_saida' => $faker->randomDigitNotNull,
        'id_productos' => $faker->randomDigitNotNull,
        'id_cidade' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
