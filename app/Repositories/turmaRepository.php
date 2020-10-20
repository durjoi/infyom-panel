<?php

namespace App\Repositories;

use App\Models\turma;
use App\Repositories\BaseRepository;

/**
 * Class turmaRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class turmaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'cabo_turma',
        'outros',
        'situacao',
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
        return turma::class;
    }
}
