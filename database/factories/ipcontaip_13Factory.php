<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ipcontaip_13;
use Faker\Generator as Faker;

$factory->define(ipcontaip_13::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'tipo_reg' => $faker->word,
        'cnpj' => $faker->word,
        'cod_cliente' => $faker->word,
        'cod_contrato' => $faker->word,
        'cod_multiservico' => $faker->word,
        'num_doc_pag_coletiva' => $faker->word,
        'num_fatura' => $faker->word,
        'num_medidor' => $faker->word,
        'descr_funcao_reduzida' => $faker->word,
        'data_leit_anterior' => $faker->word,
        'data_leit_atual' => $faker->word,
        'leitura' => $faker->word,
        'constante' => $faker->word,
        'sinal_do_ajuste' => $faker->word,
        'ajuste' => $faker->word,
        'csu_dem_lida' => $faker->word,
        'csu_dem_lida_com_ajuste' => $faker->word,
        'descricao_funcao' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
