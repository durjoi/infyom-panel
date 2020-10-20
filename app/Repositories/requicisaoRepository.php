<?php

namespace App\Repositories;

use App\Models\requicisao;
use App\Repositories\BaseRepository;

/**
 * Class requicisaoRepository
 * @package App\Repositories
 * @version May 24, 2020, 10:58 am UTC
*/

class requicisaoRepository extends BaseRepository
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
        return requicisao::class;
    }
}
