<?php

namespace App\Repositories;

use App\Models\Empregados;
use App\Repositories\BaseRepository;

/**
 * Class EmpregadosRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:01 am UTC
*/

class EmpregadosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'funcao',
        'admissao',
        'desligamento',
        'situacao',
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
        return Empregados::class;
    }
}
