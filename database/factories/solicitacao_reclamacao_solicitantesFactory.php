<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\solicitacao_reclamacao_solicitantes;
use Faker\Generator as Faker;

$factory->define(solicitacao_reclamacao_solicitantes::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'idsolicitacaoreclamacao' => $faker->randomDigitNotNull,
        'nome' => $faker->word,
        'telefone' => $faker->word,
        'email' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
