<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Eventos_orcamento;
use Faker\Generator as Faker;

$factory->define(Eventos_orcamento::class, function (Faker $faker) {

    return [
        'quantidade' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_eventos' => $faker->randomDigitNotNull,
        'id_contrato_itens' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
