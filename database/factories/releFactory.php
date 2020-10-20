<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\rele;
use Faker\Generator as Faker;

$factory->define(rele::class, function (Faker $faker) {

    return [
        'rele_descricao' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
