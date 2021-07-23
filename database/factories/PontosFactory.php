<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pontos;
use Faker\Generator as Faker;

$factory->define(Pontos::class, function (Faker $faker) {

    return [
        'numero_do_poste' => $faker->randomDigitNotNull,
        'cadastro_sativa' => $faker->word,
        'trafo' => $faker->word,
        'endereco_descricao' => $faker->word,
        'acompanhamento_obras_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->randomDigitNotNull,
        'updated_at' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->randomDigitNotNull
    ];
});
