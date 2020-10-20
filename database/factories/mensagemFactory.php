<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\mensagem;
use Faker\Generator as Faker;

$factory->define(mensagem::class, function (Faker $faker) {

    return [
        'idusuario_de' => $faker->randomDigitNotNull,
        'idusuario_para' => $faker->randomDigitNotNull,
        'enviadaem' => $faker->date('Y-m-d H:i:s'),
        'titulo' => $faker->word,
        'corpo' => $faker->word,
        'situacao' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
