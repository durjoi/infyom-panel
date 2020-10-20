<?php

namespace App\Repositories;

use App\Models\usuarioCidade;
use App\Repositories\BaseRepository;

/**
 * Class usuarioCidadeRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:03 am UTC
*/

class usuarioCidadeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
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
        return usuarioCidade::class;
    }
}
