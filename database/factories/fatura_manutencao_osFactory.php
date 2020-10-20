<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\fatura_manutencao_os;
use Faker\Generator as Faker;

$factory->define(fatura_manutencao_os::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'idfaturamanutencao' => $faker->randomDigitNotNull,
        'idsolicitacaoreclamacao' => $faker->randomDigitNotNull,
        'valor_os' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
