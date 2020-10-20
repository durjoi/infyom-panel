<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\usuarioCidade;
use Faker\Generator as Faker;

$factory->define(usuarioCidade::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
