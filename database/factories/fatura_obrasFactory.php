<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\fatura_obras;
use Faker\Generator as Faker;

$factory->define(fatura_obras::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'idempresa' => $faker->randomDigitNotNull,
        'numero' => $faker->word,
        'idmeses' => $faker->randomDigitNotNull,
        'ano' => $faker->randomDigitNotNull,
        'situacao' => $faker->word,
        'aberta_em' => $faker->date('Y-m-d H:i:s'),
        'aberta_idusuario' => $faker->randomDigitNotNull,
        'encaminhada_em' => $faker->date('Y-m-d H:i:s'),
        'encaminhada_idusuario' => $faker->randomDigitNotNull,
        'pago_em' => $faker->date('Y-m-d H:i:s'),
        'pago_idusuario' => $faker->randomDigitNotNull,
        'data_inicio' => $faker->word,
        'data_termino' => $faker->word,
        'titulo_relatorio' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
