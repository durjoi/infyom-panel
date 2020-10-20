<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Controle_historicos;
use Faker\Generator as Faker;

$factory->define(Controle_historicos::class, function (Faker $faker) {

    return [
        'descricao' => $faker->word,
        'id_solicitacao_reclamacao' => $faker->randomDigitNotNull,
        'id_cidade' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
