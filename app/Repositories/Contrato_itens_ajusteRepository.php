<?php

namespace App\Repositories;

use App\Models\Contrato_itens_ajuste;
use App\Repositories\BaseRepository;

/**
 * Class Contrato_itens_ajusteRepository
 * @package App\Repositories
 * @version May 24, 2020, 8:59 am UTC
*/

class Contrato_itens_ajusteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'data_inicio',
        'ajuste',
        'incluidodoem',
        'id_contrato',
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
        return Contrato_itens_ajuste::class;
    }
}
