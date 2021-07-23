<?php

namespace App\Repositories;

use App\Models\requisicao;
use App\Repositories\BaseRepository;

/**
 * Class requisicaoRepository
 * @package App\Repositories
 * @version May 24, 2020, 12:09 pm UTC
*/

class requisicaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'data_operacao',
        'operacao',
        'solicitante',
        'autorizado_por',
        'obras',
        'bairro',
        'turma',
        'observacao'
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
        return requisicao::class;
    }
}
