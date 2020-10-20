<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Aplicacaos;
use Faker\Generator as Faker;

$factory->define(Aplicacaos::class, function (Faker $faker) {

    return [
        'aplicacao_descricao' => $faker->word,
        'registradoem' => $faker->date('Y-m-d H:i:s'),
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
