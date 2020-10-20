<?php

namespace App\Repositories;

use App\Models\medidor;
use App\Repositories\BaseRepository;

/**
 * Class medidorRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:01 am UTC
*/

class medidorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'numero',
        'idlogradouro',
        'idbairro',
        'poste_numero',
        'contrato',
        'capacidade_medicao',
        'capacidade_disjuntor',
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
        return medidor::class;
    }
}
