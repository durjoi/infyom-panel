<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PedidoMaterial;
use Faker\Generator as Faker;

$factory->define(PedidoMaterial::class, function (Faker $faker) {

    return [
        'aplicacao_obra' => $faker->word,
        'engenheiro_eletricista' => $faker->word,
        'data' => $faker->date('Y-m-d H:i:s'),
        'numero' => $faker->randomDigitNotNull,
        'centro_de_custo' => $faker->word,
        'almoxarifado' => $faker->word,
        'telefone' => $faker->word,
        'celular' => $faker->word,
        'cnpj' => $faker->word,
        'inscricao_estadual' => $faker->word,
        'solicitante' => $faker->word,
        'icms' => $faker->word,
        'juros_mes' => $faker->randomDigitNotNull,
        'email' => $faker->word,
        'endereco_entrega' => $faker->word,
        'bairro_entrega' => $faker->word,
        'cep_entrega' => $faker->word,
        'cnpj_entrega' => $faker->word,
        'cidade_entrega' => $faker->word,
        'telefone_contato' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
