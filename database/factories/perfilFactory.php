<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\perfil;
use Faker\Generator as Faker;

$factory->define(perfil::class, function (Faker $faker) {

    return [
        'idusuario' => $faker->randomDigitNotNull,
        'idperfilcadastro' => $faker->randomDigitNotNull,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario_incluido' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
