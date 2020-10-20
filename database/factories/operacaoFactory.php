<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\operacao;
use Faker\Generator as Faker;

$factory->define(operacao::class, function (Faker $faker) {

    return [
        'operacao' => $faker->word,
        'utilizacao' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
