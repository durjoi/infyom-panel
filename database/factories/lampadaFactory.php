<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\lampada;
use Faker\Generator as Faker;

$factory->define(lampada::class, function (Faker $faker) {

    return [
        'lampada_descricao' => $faker->word,
        'lampada_potencia' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'lampada_abreveada' => $faker->word,
        'perda_rator' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
