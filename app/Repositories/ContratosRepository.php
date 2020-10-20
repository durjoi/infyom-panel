<?php

namespace App\Repositories;

use App\Models\Contratos;
use App\Repositories\BaseRepository;

/**
 * Class ContratosRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class ContratosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'contrato_numero',
        'contrato_tipo',
        'data_inicio',
        'data_termino',
        'fatork',
        'operacao',
        'incluidodoem',
        'id_empresa',
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
        return Contratos::class;
    }
}
