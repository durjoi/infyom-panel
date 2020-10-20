<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Clientes;
use Faker\Generator as Faker;

$factory->define(Clientes::class, function (Faker $faker) {

    return [
        'razao_social' => $faker->word,
        'nome_fantasi' => $faker->word,
        'cnpj' => $faker->word,
        'inscricao_municipal' => $faker->word,
        'inscricao_estadual' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_cidade' => $faker->word,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
