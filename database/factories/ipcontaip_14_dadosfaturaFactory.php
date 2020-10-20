<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ipcontaip_14_dadosfatura;
use Faker\Generator as Faker;

$factory->define(ipcontaip_14_dadosfatura::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'tipo_reg' => $faker->word,
        'cnpj' => $faker->word,
        'cod_cliente' => $faker->word,
        'cod_contrato' => $faker->word,
        'num_medidor' => $faker->word,
        'cod_multiservico' => $faker->word,
        'num_doc_pag_coletiva' => $faker->word,
        'num_fatura' => $faker->word,
        'cod_conceito' => $faker->word,
        'qtd_conceito' => $faker->word,
        'preco_conceito' => $faker->word,
        'sinal_do_valor_conceitos' => $faker->word,
        'valor_final_com_imposto' => $faker->word,
        'descricao_conceito' => $faker->word,
        'contaipano' => $faker->word,
        'contaipmes' => $faker->word,
        'segmento' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
