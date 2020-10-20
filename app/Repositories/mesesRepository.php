<?php

namespace App\Repositories;

use App\Models\meses;
use App\Repositories\BaseRepository;

/**
 * Class mesesRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class mesesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'mes',
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
        return meses::class;
    }
}
