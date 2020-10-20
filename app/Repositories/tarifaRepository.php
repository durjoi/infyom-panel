<?php

namespace App\Repositories;

use App\Models\tarifa;
use App\Repositories\BaseRepository;

/**
 * Class tarifaRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class tarifaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo',
        'idmeses',
        'ano_referencia',
        'valor',
        'aliquota',
        'resolucao_annel',
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
        return tarifa::class;
    }
}
