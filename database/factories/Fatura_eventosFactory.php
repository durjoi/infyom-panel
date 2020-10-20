<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Fatura_eventos;
use Faker\Generator as Faker;

$factory->define(Fatura_eventos::class, function (Faker $faker) {

    return [
        'numero' => $faker->word,
        'ano' => $faker->randomDigitNotNull,
        'aberta_em' => $faker->word,
        'aberta_idusuario' => $faker->randomDigitNotNull,
        'encaminhada_em' => $faker->word,
        'encaminhada_idusuario' => $faker->randomDigitNotNull,
        'pago_em' => $faker->word,
        'pago_idusuario' => $faker->randomDigitNotNull,
        'data_inicio' => $faker->word,
        'data_termino' => $faker->word,
        'titulo_relatorio' => $faker->word,
        'id_cidade' => $faker->randomDigitNotNull,
        'id_meses' => $faker->randomDigitNotNull,
        'id_empresa' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
