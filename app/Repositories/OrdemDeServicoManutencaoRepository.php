<?php

namespace App\Repositories;

use App\Models\OrdemDeServicoManutencao;
use App\Repositories\BaseRepository;

/**
 * Class OrdemDeServicoManutencaoRepository
 * @package App\Repositories
 * @version June 10, 2020, 12:26 pm UTC
*/

class OrdemDeServicoManutencaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'protocolo',
        'data_hora_registro',
        'registrado_por',
        'protocolo_oficio',
        'tipo_do_solicitante',
        'solicitante',
        'telefone_do_solicitante',
        'numero_de_poste',
        'numero_de_luminaria',
        'coordenada_x',
        'coordenada_y',
        'endereco_cadastro',
        'vis_a_vis_cadastro',
        'referencia_cadastro',
        'endereco_fornecido',
        'vis_a_vis_fornecido',
        'referencia_fornecido',
        'dados_complementares',
        'servico_solicitado',
        'braco',
        'suporte',
        'conector',
        'luminaria',
        'vs',
        'lampada_mvw',
        'mista',
        'reator',
        'tipo_reator',
        'rele',
        'base',
        'manutencao_em_poste',
        'manutencao_em_topo_de_poste',
        'cabo_turma',
        'supervisor',
        'eletricista',
        'executada_em',
        'status'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return OrdemDeServicoManutencao::class;
    }
}
