<?php

namespace App\Repositories;

use App\Models\sequencial;
use App\Repositories\BaseRepository;

/**
 * Class sequencialRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class sequencialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'protocolo',
        'entrada',
        'saida',
        'poste_numero',
        'obras',
        'eventos'
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
        return sequencial::class;
    }
}
