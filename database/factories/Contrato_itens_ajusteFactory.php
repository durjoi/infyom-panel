<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contrato_itens_ajuste;
use Faker\Generator as Faker;

$factory->define(Contrato_itens_ajuste::class, function (Faker $faker) {

    return [
        'data_inicio' => $faker->word,
        'ajuste' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_contrato' => $faker->word,
        'id_cidade' => $faker->word,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
