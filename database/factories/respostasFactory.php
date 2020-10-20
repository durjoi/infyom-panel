<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\respostas;
use Faker\Generator as Faker;

$factory->define(respostas::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'modulo' => $faker->word,
        'submodulo' => $faker->word,
        'descricao' => $faker->word,
        'tipo' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
