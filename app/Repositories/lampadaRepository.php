<?php

namespace App\Repositories;

use App\Models\lampada;
use App\Repositories\BaseRepository;

/**
 * Class lampadaRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class lampadaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lampada_descricao',
        'lampada_potencia',
        'incluidoem',
        'idusuario',
        'lampada_abreveada',
        'perda_rator'
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
        return lampada::class;
    }
}
