<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ipcontaip_11;
use Faker\Generator as Faker;

$factory->define(ipcontaip_11::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'tipo_reg' => $faker->word,
        'cnpj' => $faker->word,
        'cod_cliente' => $faker->word,
        'cod_contrato' => $faker->word,
        'cod_multiservico' => $faker->word,
        'compl_nome' => $faker->word,
        'endereco_rua_av' => $faker->word,
        'endereco_compl' => $faker->word,
        'endereco_bairro' => $faker->word,
        'endereco_municipio_uf_cep' => $faker->word,
        'contaipano' => $faker->word,
        'contaipmes' => $faker->word,
        'contaipdatainclusao' => $faker->word,
        'contaipusuariologin' => $faker->word,
        'segmento' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
