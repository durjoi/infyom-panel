<?php

namespace App\Repositories;

use App\Models\Cidades;
use App\Repositories\BaseRepository;

/**
 * Class CidadesRepository
 * @package App\Repositories
 * @version May 23, 2020, 5:59 am UTC
*/

class CidadesRepository extends BaseRepository
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
        return Cidades::class;
    }
}
