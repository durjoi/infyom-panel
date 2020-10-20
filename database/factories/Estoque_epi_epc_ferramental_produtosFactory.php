<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Estoque_epi_epc_ferramental_produtos;
use Faker\Generator as Faker;

$factory->define(Estoque_epi_epc_ferramental_produtos::class, function (Faker $faker) {

    return [
        'quantidade' => $faker->word,
        'valor_unitario' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_estoque_epi_epc_ferramental' => $faker->randomDigitNotNull,
        'id_produtos' => $faker->randomDigitNotNull,
        'id_cidade' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
