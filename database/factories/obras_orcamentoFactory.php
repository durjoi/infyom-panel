<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\obras_orcamento;
use Faker\Generator as Faker;

$factory->define(obras_orcamento::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'idobras' => $faker->randomDigitNotNull,
        'idcontratoitens' => $faker->randomDigitNotNull,
        'quantidade_mo' => $faker->word,
        'origem_mo' => $faker->word,
        'quantidade_mt' => $faker->word,
        'origem_mt' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
