<?php

namespace App\Repositories;

use App\Models\cidade;
use App\Repositories\BaseRepository;

/**
 * Class cidadeRepository
 * @package App\Repositories
 * @version May 24, 2020, 8:59 am UTC
*/

class cidadeRepository extends BaseRepository
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
        return cidade::class;
    }
}
