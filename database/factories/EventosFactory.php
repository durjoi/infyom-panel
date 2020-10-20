<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Eventos;
use Faker\Generator as Faker;

$factory->define(Eventos::class, function (Faker $faker) {

    return [
        'protocolo' => $faker->word,
        'data_solicitacao' => $faker->word,
        'solicitante' => $faker->word,
        'telefones' => $faker->word,
        'email' => $faker->word,
        'comumento_numero' => $faker->word,
        'documento_tipo' => $faker->word,
        'evento_descricao' => $faker->word,
        'data_inicio' => $faker->word,
        'data_termino' => $faker->word,
        'quantidade_dias' => $faker->randomDigitNotNull,
        'referencia' => $faker->word,
        'responsavel' => $faker->word,
        'telefones_responsavel' => $faker->word,
        'email_responsavel' => $faker->word,
        'observacao' => $faker->word,
        'situacao' => $faker->word,
        'enviado_impressao' => $faker->word,
        'enviado_mobile' => $faker->word,
        'enviado_mobile_id_turma' => $faker->word,
        'c_informar_ciencia' => $faker->word,
        'c_informar_concluida' => $faker->word,
        'data_conclusao' => $faker->word,
        'data_baixa' => $faker->word,
        'dados_conclusivos' => $faker->word,
        'alterador_em' => $faker->word,
        'logradouro_descricao' => $faker->word,
        'tipo_evento' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_tipo_solicitante' => $faker->randomDigitNotNull,
        'id_tipo_solicitacao' => $faker->randomDigitNotNull,
        'id_logradouro' => $faker->randomDigitNotNull,
        'id_bairro' => $faker->randomDigitNotNull,
        'id_empresa' => $faker->randomDigitNotNull,
        'id_turma' => $faker->randomDigitNotNull,
        'id_cidade' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
