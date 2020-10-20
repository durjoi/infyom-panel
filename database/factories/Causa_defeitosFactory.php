<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Causa_defeitos;
use Faker\Generator as Faker;

$factory->define(Causa_defeitos::class, function (Faker $faker) {

    return [
        'causa_defeito_descricao' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
