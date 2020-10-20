<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\respostas_usuarios;
use Faker\Generator as Faker;

$factory->define(respostas_usuarios::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'idrespostas' => $faker->randomDigitNotNull,
        'idusuarioreceber' => $faker->randomDigitNotNull,
        'receber_mensagem_instantanea' => $faker->randomDigitNotNull,
        'receber_mensagem_diaria' => $faker->randomDigitNotNull,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
