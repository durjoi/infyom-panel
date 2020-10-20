<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\obras_solicitante;
use Faker\Generator as Faker;

$factory->define(obras_solicitante::class, function (Faker $faker) {

    return [
        'idobras' => $faker->randomDigitNotNull,
        'solicitante_nome' => $faker->word,
        'solicitante_telefone' => $faker->word,
        'solicitante_email' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
