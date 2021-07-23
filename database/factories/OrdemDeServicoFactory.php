<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OrdemDeServico;
use Faker\Generator as Faker;

$factory->define(OrdemDeServico::class, function (Faker $faker) {

    return [
        'origem' => $faker->word,
        'numero_de_poste' => $faker->word,
        'numero_de_luminaria' => $faker->word,
        'solicitante' => $faker->word,
        'telefone_do_solicitante' => $faker->word,
        'tipo_do_solicitante' => $faker->word,
        'tipo_da_solictacao' => $faker->word,
        'logradouro' => $faker->word,
        'bairro' => $faker->word,
        'vis_a_vis' => $faker->word,
        'referencia' => $faker->word,
        'tipo_do_logradouro' => $faker->word,
        'nome_do_logradouro' => $faker->word,
        'dados_complementares' => $faker->word,
        'servico_solicitado' => $faker->word,
        'protocolo_oficio' => $faker->word
    ];
});
