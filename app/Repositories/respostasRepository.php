<?php

namespace App\Repositories;

use App\Models\respostas;
use App\Repositories\BaseRepository;

/**
 * Class respostasRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class respostasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'modulo',
        'submodulo',
        'descricao',
        'tipo',
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
        return respostas::class;
    }
}
