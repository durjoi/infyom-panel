<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ipcontaip_secretarias;
use Faker\Generator as Faker;

$factory->define(ipcontaip_secretarias::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'secretaria_sigla' => $faker->word,
        'secretaria_nome' => $faker->word,
        'secretaria_tipo' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
