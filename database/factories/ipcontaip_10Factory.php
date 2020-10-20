<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ipcontaip_10;
use Faker\Generator as Faker;

$factory->define(ipcontaip_10::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'cod_cliente' => $faker->word,
        'nome' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
