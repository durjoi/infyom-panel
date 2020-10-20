<?php

namespace App\Repositories;

use App\Models\suporte;
use App\Repositories\BaseRepository;

/**
 * Class suporteRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:01 am UTC
*/

class suporteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'suporte_descricao',
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
        return suporte::class;
    }
}
