<?php

namespace App\Repositories;

use App\Models\luminaria;
use App\Repositories\BaseRepository;

/**
 * Class luminariaRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:01 am UTC
*/

class luminariaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'luminaria_descricao',
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
        return luminaria::class;
    }
}
