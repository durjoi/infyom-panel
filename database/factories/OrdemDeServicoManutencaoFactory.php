<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OrdemDeServicoManutencao;
use Faker\Generator as Faker;

$factory->define(OrdemDeServicoManutencao::class, function (Faker $faker) {

    return [
        'protocolo' => $faker->word,
        'data_hora_registro' => $faker->word,
        'registrado_por' => $faker->word,
        'protocolo_oficio' => $faker->word,
        'tipo_do_solicitante' => $faker->word,
        'solicitante' => $faker->word,
        'telefone_do_solicitante' => $faker->word,
        'numero_de_poste' => $faker->word,
        'numero_de_luminaria' => $faker->word,
        'coordenada_x' => $faker->word,
        'coordenada_y' => $faker->word,
        'endereco_cadastro' => $faker->word,
        'vis_a_vis_cadastro' => $faker->word,
        'referencia_cadastro' => $faker->word,
        'endereco_fornecido' => $faker->word,
        'vis_a_vis_fornecido' => $faker->word,
        'referencia_fornecido' => $faker->word,
        'dados_complementares' => $faker->word,
        'servico_solicitado' => $faker->word,
        'braco' => $faker->word,
        'suporte' => $faker->word,
        'conector' => $faker->word,
        'luminaria' => $faker->word,
        'vs' => $faker->word,
        'lampada_mvw' => $faker->word,
        'mista' => $faker->word,
        'reator' => $faker->word,
        'tipo_reator' => $faker->word,
        'rele' => $faker->word,
        'base' => $faker->word,
        'manutencao_em_poste' => $faker->word,
        'manutencao_em_topo_de_poste' => $faker->word,
        'cabo_turma' => $faker->word,
        'supervisor' => $faker->word,
        'eletricista' => $faker->word,
        'executada_em' => $faker->date('Y-m-d H:i:s'),
        'status' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
