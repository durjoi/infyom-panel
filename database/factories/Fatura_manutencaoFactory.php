<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Fatura_manutencao;
use Faker\Generator as Faker;

$factory->define(Fatura_manutencao::class, function (Faker $faker) {

    return [
        'numero' => $faker->word,
        'ano' => $faker->randomDigitNotNull,
        'situacao' => $faker->word,
        'aberta_em' => $faker->word,
        'aberta_id_usuario' => $faker->randomDigitNotNull,
        'encaminhada_em' => $faker->word,
        'encaminhada_id_usuario' => $faker->randomDigitNotNull,
        'pago_em' => $faker->word,
        'pago_id_usuario' => $faker->randomDigitNotNull,
        'data_inicio' => $faker->word,
        'data_termino' => $faker->word,
        'id_cidade' => $faker->randomDigitNotNull,
        'id_empresa' => $faker->randomDigitNotNull,
        'id_meses' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
