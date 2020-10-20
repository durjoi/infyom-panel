<?php

namespace App\Repositories;

use App\Models\obras;
use App\Repositories\BaseRepository;

/**
 * Class obrasRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class obrasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'protocolo',
        'numero_processo',
        'data_processo',
        'idtiposolicitante',
        'idtiposolicitacao',
        'solicitante',
        'telefones',
        'email',
        'idra',
        'idlogradouro',
        'idbairro',
        'idtipoacao',
        'servico_solicitado',
        'situacao',
        'incluidoem',
        'idusuario',
        'enviado_impressao',
        'enviado_mobile',
        'enviado_mobile_idturma',
        'referencia',
        'observacao',
        'telefone_contato',
        'idempresa',
        'data_prevista_inicial',
        'data_prevista_final',
        'fiscal_prefeitura',
        'art_obra',
        'c_informar_ciencia',
        'c_informar_concluida',
        'data_execucao',
        'hora_execucao',
        'data_baixa',
        'hora_baixa',
        'idturma',
        'alterador_em',
        'idusuarioalterou',
        'logradouro_descricao',
        'observacao_fatura',
        'complemento_turma'
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
        return obras::class;
    }
}
