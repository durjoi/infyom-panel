<?php

namespace App\Repositories;

use App\Models\poste;
use App\Repositories\BaseRepository;

/**
 * Class posteRepository
 * @package App\Repositories
 * @version May 24, 2020, 8:59 am UTC
*/

class posteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'poste_descricao',
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
        return poste::class;
    }
}
