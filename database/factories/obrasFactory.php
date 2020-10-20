<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\obras;
use Faker\Generator as Faker;

$factory->define(obras::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'protocolo' => $faker->word,
        'numero_processo' => $faker->word,
        'data_processo' => $faker->word,
        'idtiposolicitante' => $faker->randomDigitNotNull,
        'idtiposolicitacao' => $faker->randomDigitNotNull,
        'solicitante' => $faker->word,
        'telefones' => $faker->word,
        'email' => $faker->word,
        'idra' => $faker->randomDigitNotNull,
        'idlogradouro' => $faker->randomDigitNotNull,
        'idbairro' => $faker->randomDigitNotNull,
        'idtipoacao' => $faker->randomDigitNotNull,
        'servico_solicitado' => $faker->word,
        'situacao' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'enviado_impressao' => $faker->randomDigitNotNull,
        'enviado_mobile' => $faker->randomDigitNotNull,
        'enviado_mobile_idturma' => $faker->randomDigitNotNull,
        'referencia' => $faker->word,
        'observacao' => $faker->word,
        'telefone_contato' => $faker->word,
        'idempresa' => $faker->randomDigitNotNull,
        'data_prevista_inicial' => $faker->word,
        'data_prevista_final' => $faker->word,
        'fiscal_prefeitura' => $faker->word,
        'art_obra' => $faker->word,
        'c_informar_ciencia' => $faker->randomDigitNotNull,
        'c_informar_concluida' => $faker->randomDigitNotNull,
        'data_execucao' => $faker->word,
        'hora_execucao' => $faker->word,
        'data_baixa' => $faker->date('Y-m-d H:i:s'),
        'hora_baixa' => $faker->word,
        'idturma' => $faker->randomDigitNotNull,
        'alterador_em' => $faker->date('Y-m-d H:i:s'),
        'idusuarioalterou' => $faker->randomDigitNotNull,
        'logradouro_descricao' => $faker->word,
        'observacao_fatura' => $faker->word,
        'complemento_turma' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
