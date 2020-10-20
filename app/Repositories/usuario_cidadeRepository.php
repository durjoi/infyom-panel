<?php

namespace App\Repositories;

use App\Models\usuario_cidade;
use App\Repositories\BaseRepository;

/**
 * Class usuario_cidadeRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class usuario_cidadeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
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
        return usuario_cidade::class;
    }
}
