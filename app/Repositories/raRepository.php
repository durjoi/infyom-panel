<?php

namespace App\Repositories;

use App\Models\ra;
use App\Repositories\BaseRepository;

/**
 * Class raRepository
 * @package App\Repositories
 * @version May 24, 2020, 8:59 am UTC
*/

class raRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'ra_descricao',
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
        return ra::class;
    }
}
