<?php

namespace App\Repositories;

use App\Models\ItensOs;
use App\Repositories\BaseRepository;

/**
 * Class ItensOsRepository
 * @package App\Repositories
 * @version June 10, 2020, 1:31 pm UTC
*/

class ItensOsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'material',
        'qtd',
        'defeito_encontrado',
        'causa_provavel',
        'ordem_de_servico_manutencao_id'
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
        return ItensOs::class;
    }
}
