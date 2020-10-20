<?php

namespace App\Repositories;

use App\Models\obras_orcamento;
use App\Repositories\BaseRepository;

/**
 * Class obras_orcamentoRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class obras_orcamentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'idobras',
        'idcontratoitens',
        'quantidade_mo',
        'origem_mo',
        'quantidade_mt',
        'origem_mt',
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
        return obras_orcamento::class;
    }
}
