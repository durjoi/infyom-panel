<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Controle_motivos;
use Faker\Generator as Faker;

$factory->define(Controle_motivos::class, function (Faker $faker) {

    return [
        'opcao' => $faker->word,
        'descricao' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_cidade' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
