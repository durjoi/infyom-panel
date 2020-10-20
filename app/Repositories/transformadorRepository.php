<?php

namespace App\Repositories;

use App\Models\transformador;
use App\Repositories\BaseRepository;

/**
 * Class transformadorRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class transformadorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'codigo',
        'numerocia',
        'idlogradouro',
        'idbairro',
        'poste_numero',
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
        return transformador::class;
    }
}
