<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Empresas;
use Faker\Generator as Faker;

$factory->define(Empresas::class, function (Faker $faker) {

    return [
        'empresa_nome' => $faker->word,
        'empresa_descricao' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
