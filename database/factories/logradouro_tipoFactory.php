<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\logradouro_tipo;
use Faker\Generator as Faker;

$factory->define(logradouro_tipo::class, function (Faker $faker) {

    return [
        'logradouro_tipo_descricao' => $faker->word,
        'logradouro_tipo_abreviado' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
