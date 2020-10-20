<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\origem_solicitacao;
use Faker\Generator as Faker;

$factory->define(origem_solicitacao::class, function (Faker $faker) {

    return [
        'origemsolicitacao_codigo' => $faker->word,
        'origemsolicitacao_descricao' => $faker->word,
        'origemsolicitacao_descritivo' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
