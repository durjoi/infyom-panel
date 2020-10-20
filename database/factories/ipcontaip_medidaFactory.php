<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ipcontaip_medida;
use Faker\Generator as Faker;

$factory->define(ipcontaip_medida::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'nome_concessionaria' => $faker->word,
        'nome' => $faker->word,
        'compl_nome' => $faker->word,
        'idsecretaria' => $faker->randomDigitNotNull,
        'num_fatura' => $faker->word,
        'data_vencimento' => $faker->word,
        'endereco_rua_av' => $faker->word,
        'endereco_compl' => $faker->word,
        'endereco_bairro' => $faker->word,
        'endereco_municipio_uf_cep' => $faker->word,
        'cod_contrato' => $faker->word,
        'num_medidor' => $faker->word,
        'data_leit_anterior' => $faker->word,
        'data_leit_atual' => $faker->word,
        'leitura_anterior' => $faker->word,
        'leitura_atual' => $faker->word,
        'qtd_conceito' => $faker->word,
        'diferenca_leituras' => $faker->word,
        'constante' => $faker->word,
        'consumo' => $faker->word,
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
        'unidade_fiscalizada' => $faker->word,
        'unidade_fiscalizada_data' => $faker->word,
        'unidade_fiscalizada_parecer' => $faker->word,
        'unidade_fiscalizada_observacao' => $faker->word,
        'fatura_numero' => $faker->word,
        'fatura_mes' => $faker->word,
        'fatura_ano' => $faker->randomDigitNotNull,
        'idfollowup' => $faker->randomDigitNotNull,
        'conta_entregue_fisicamente' => $faker->randomDigitNotNull,
        'status_conta_fisica' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
