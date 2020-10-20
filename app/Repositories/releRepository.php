<?php

namespace App\Repositories;

use App\Models\rele;
use App\Repositories\BaseRepository;

/**
 * Class releRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class releRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rele_descricao',
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
        return rele::class;
    }
}
