<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AcompanhamentoObras;
use Faker\Generator as Faker;

$factory->define(AcompanhamentoObras::class, function (Faker $faker) {

    return [
        'data' => $faker->word,
        'fiscal_pmrsj' => $faker->word,
        'fiscal_sativa' => $faker->word,
        'reators_id' => $faker->randomDigitNotNull,
        'lampadas_id' => $faker->randomDigitNotNull,
        'reles_id' => $faker->randomDigitNotNull,
        'bases_id' => $faker->randomDigitNotNull,
        'luminarias_id' => $faker->randomDigitNotNull,
        'protocolo' => $faker->word,
        'material_utilizado_sativa' => $faker->word,
        'material_utilizado_sesp' => $faker->word,
        'observacoes_extras' => $faker->word,
        'observacoes_sativa' => $faker->word,
        'recebimento_sesp' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
