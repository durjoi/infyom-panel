<?php

namespace App\Repositories;

use App\Models\Causa_defeitos;
use App\Repositories\BaseRepository;

/**
 * Class Causa_defeitosRepository
 * @package App\Repositories
 * @version May 24, 2020, 8:59 am UTC
*/

class Causa_defeitosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'causa_defeito_descricao',
        'incluidodoem',
        'id_usuario'
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
        return Causa_defeitos::class;
    }
}
