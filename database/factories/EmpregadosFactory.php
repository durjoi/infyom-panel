<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Empregados;
use Faker\Generator as Faker;

$factory->define(Empregados::class, function (Faker $faker) {

    return [
        'nome' => $faker->word,
        'funcao' => $faker->word,
        'admissao' => $faker->word,
        'desligamento' => $faker->word,
        'situacao' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
