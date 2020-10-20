<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\obras_estoque;
use Faker\Generator as Faker;

$factory->define(obras_estoque::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'obras_estoque_descricao' => $faker->word,
        'tipo' => $faker->word,
        'status' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
