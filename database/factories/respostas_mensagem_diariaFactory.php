<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\respostas_mensagem_diaria;
use Faker\Generator as Faker;

$factory->define(respostas_mensagem_diaria::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'idusuarioreceber' => $faker->randomDigitNotNull,
        'enviadoem' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
