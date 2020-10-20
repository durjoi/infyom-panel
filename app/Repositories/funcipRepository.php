<?php

namespace App\Repositories;

use App\Models\funcip;
use App\Repositories\BaseRepository;

/**
 * Class funcipRepository
 * @package App\Repositories
 * @version May 24, 2020, 8:59 am UTC
*/

class funcipRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'ano',
        'idmeses',
        'modulo',
        'valor_estimado_pagamento',
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
        return funcip::class;
    }
}
