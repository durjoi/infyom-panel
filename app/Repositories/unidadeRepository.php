<?php

namespace App\Repositories;

use App\Models\unidade;
use App\Repositories\BaseRepository;

/**
 * Class unidadeRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class unidadeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'abreviado',
        'unidade_descricao',
        'incluidoem',
        'idusuario'
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
        return unidade::class;
    }
}
