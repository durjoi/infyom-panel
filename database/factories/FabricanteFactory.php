<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Fabricante;
use Faker\Generator as Faker;

$factory->define(Fabricante::class, function (Faker $faker) {

    return [
        'fabricante_descricao' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_cidade' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
