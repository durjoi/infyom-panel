<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Estoque_epi_epc_ferramental;
use Faker\Generator as Faker;

$factory->define(Estoque_epi_epc_ferramental::class, function (Faker $faker) {

    return [
        'autorizado_por' => $faker->word,
        'actualicao' => $faker->word,
        'observacao' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_operacao' => $faker->randomDigitNotNull,
        'id_empregados' => $faker->randomDigitNotNull,
        'id_cidade' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
