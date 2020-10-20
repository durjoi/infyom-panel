<?php

namespace App\Repositories;

use App\Models\reator;
use App\Repositories\BaseRepository;

/**
 * Class reatorRepository
 * @package App\Repositories
 * @version May 24, 2020, 8:59 am UTC
*/

class reatorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'reator_descricao',
        'reator_perda',
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
        return reator::class;
    }
}
