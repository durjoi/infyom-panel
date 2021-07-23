<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ItensOs;
use Faker\Generator as Faker;

$factory->define(ItensOs::class, function (Faker $faker) {

    return [
        'material' => $faker->word,
        'qtd' => $faker->randomDigitNotNull,
        'defeito_encontrado' => $faker->word,
        'causa_provavel' => $faker->word,
        'ordem_de_servico_manutencao_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
