<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\transformador;
use Faker\Generator as Faker;

$factory->define(transformador::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'codigo' => $faker->word,
        'numerocia' => $faker->word,
        'idlogradouro' => $faker->randomDigitNotNull,
        'idbairro' => $faker->randomDigitNotNull,
        'poste_numero' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
