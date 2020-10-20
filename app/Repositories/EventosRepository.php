<?php

namespace App\Repositories;

use App\Models\Eventos;
use App\Repositories\BaseRepository;

/**
 * Class EventosRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class EventosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'protocolo',
        'data_solicitacao',
        'solicitante',
        'telefones',
        'email',
        'comumento_numero',
        'documento_tipo',
        'evento_descricao',
        'data_inicio',
        'data_termino',
        'quantidade_dias',
        'referencia',
        'responsavel',
        'telefones_responsavel',
        'email_responsavel',
        'observacao',
        'situacao',
        'enviado_impressao',
        'enviado_mobile',
        'enviado_mobile_id_turma',
        'c_informar_ciencia',
        'c_informar_concluida',
        'data_conclusao',
        'data_baixa',
        'dados_conclusivos',
        'alterador_em',
        'logradouro_descricao',
        'tipo_evento',
        'incluidodoem',
        'id_tipo_solicitante',
        'id_tipo_solicitacao',
        'id_logradouro',
        'id_bairro',
        'id_empresa',
        'id_turma',
        'id_cidade',
        'id_usuario'
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
        return Eventos::class;
    }
}
