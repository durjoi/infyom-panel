<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\perfil_cadastro;
use Faker\Generator as Faker;

$factory->define(perfil_cadastro::class, function (Faker $faker) {

    return [
        'modulo' => $faker->word,
        'descricao' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
