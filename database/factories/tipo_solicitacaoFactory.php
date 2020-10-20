<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tipo_solicitacao;
use Faker\Generator as Faker;

$factory->define(tipo_solicitacao::class, function (Faker $faker) {

    return [
        'tiposolicitacao_descricao' => $faker->word,
        'tiposolicitacao_aplicacao' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
