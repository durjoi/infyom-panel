<?php

namespace App\Repositories;

use App\Models\marca;
use App\Repositories\BaseRepository;

/**
 * Class marcaRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:01 am UTC
*/

class marcaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'marca_descricao',
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
        return marca::class;
    }
}
