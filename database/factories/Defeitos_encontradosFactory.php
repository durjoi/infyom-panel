<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Defeitos_encontrados;
use Faker\Generator as Faker;

$factory->define(Defeitos_encontrados::class, function (Faker $faker) {

    return [
        'defeito_encontrato_descricao' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
