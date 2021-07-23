<?php

namespace App\Repositories;

use App\Models\Bases;
use App\Repositories\BaseRepository;

/**
 * Class BasesRepository
 * @package App\Repositories
 * @version June 7, 2020, 9:08 pm UTC
*/

class BasesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'base_descricao',
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
        return Bases::class;
    }
}
