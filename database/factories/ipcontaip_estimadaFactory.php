<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ipcontaip_estimada;
use Faker\Generator as Faker;

$factory->define(ipcontaip_estimada::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'nome_concessionaria' => $faker->word,
        'nome' => $faker->word,
        'nome_compl' => $faker->word,
        'idsecretaria' => $faker->randomDigitNotNull,
        'num_fatura' => $faker->word,
        'data_vencimento' => $faker->word,
        'endereco_rua_av' => $faker->word,
        'endereco_compl' => $faker->word,
        'endereco_bairro' => $faker->word,
        'endereco_municipio_uf_cep' => $faker->word,
        'cod_contrato' => $faker->word,
        'qtd_conceito' => $faker->word,
        'tensao_fornecimento' => $faker->word,
        'multa' => $faker->word,
        'juros' => $faker->word,
        'outros' => $faker->word,
        'variacao_percentual' => $faker->word,
        'tipo_fatura' => $faker->word,
        'cod_tarifa' => $faker->word,
        'preco_conceito' => $faker->word,
        'valor_final_com_imposto' => $faker->word,
        'valor_a_ser_faturado' => $faker->word,
        'contaipano' => $faker->randomDigitNotNull,
        'contaipmes' => $faker->word,
        'contaipdatainclusao' => $faker->word,
        'idusuario' => $faker->randomDigitNotNull,
        'novo_contrato_cadastrado' => $faker->word,
        'pagamento' => $faker->word,
        'versao_mobile' => $faker->word,
        'segmento' => $faker->word,
        'fatura_numero' => $faker->word,
        'fatura_mes' => $faker->word,
        'fatura_ano' => $faker->randomDigitNotNull,
        'idfillowup' => $faker->randomDigitNotNull,
        'conta_entregue_fisicamente' => $faker->randomDigitNotNull,
        'status_conta_fisica' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
