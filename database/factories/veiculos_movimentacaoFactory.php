<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\veiculos_movimentacao;
use Faker\Generator as Faker;

$factory->define(veiculos_movimentacao::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'idveiculos' => $faker->randomDigitNotNull,
        'saida' => $faker->date('Y-m-d H:i:s'),
        'retorno' => $faker->date('Y-m-d H:i:s'),
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
