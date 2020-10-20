<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\subestacao;
use Faker\Generator as Faker;

$factory->define(subestacao::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'subestacao' => $faker->word,
        'transformador' => $faker->word,
        'instalacao' => $faker->word,
        'barramento' => $faker->word,
        'bairro' => $faker->word,
        'tensao_secundaria' => $faker->word,
        'fases' => $faker->word,
        'kvan' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
