<?php

namespace App\Repositories;

use App\Models\cidades;
use App\Repositories\BaseRepository;

/**
 * Class cidadesRepository
 * @package App\Repositories
 * @version May 23, 2020, 5:53 am UTC
*/

class cidadesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descricao'
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
        return cidades::class;
    }
}
