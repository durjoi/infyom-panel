<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ipcontaip_12;
use Faker\Generator as Faker;

$factory->define(ipcontaip_12::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'tipo_reg' => $faker->word,
        'cnpj' => $faker->word,
        'cod_cliente' => $faker->word,
        'cod_contrato' => $faker->word,
        'cod_multiservico' => $faker->word,
        'num_cod_pag_cta_coletivo' => $faker->word,
        'num_fatura' => $faker->word,
        'codigo_instalacao' => $faker->word,
        'cod_classe_subclasse' => $faker->word,
        'cod_tarifa' => $faker->word,
        'tensao_fornecimento' => $faker->word,
        'data_fatura' => $faker->word,
        'data_vencimento' => $faker->word,
        'data_leit_anterior' => $faker->word,
        'data_leit_atual' => $faker->word,
        'tipo_fatura' => $faker->word,
        'sinal_do_saldo_da_fatura' => $faker->word,
        'saldo_da_fatura' => $faker->word,
        'valor_do_icms' => $faker->word,
        'base_calculo_icms' => $faker->word,
        'aliquota_icms' => $faker->word,
        'perda_transformacao' => $faker->word,
        'fator_de_potencia' => $faker->word,
        'valor_da_demanda_contratada' => $faker->word,
        'valor_da_demanda_contratada_na_ponta' => $faker->word,
        'valor_da_demanda_contratada_fora_de_ponta' => $faker->word,
        'valor_do_pis_fatura' => $faker->word,
        'valor_do_cofins_fatura' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
