<?php

namespace App\Repositories;

use App\Models\Fabricante;
use App\Repositories\BaseRepository;

/**
 * Class FabricanteRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class FabricanteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fabricante_descricao',
        'incluidodoem',
        'id_cidade',
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
        return Fabricante::class;
    }
}
