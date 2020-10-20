<?php

namespace App\Repositories;

use App\Models\Estoque_epi_epc_ferramental;
use App\Repositories\BaseRepository;

/**
 * Class Estoque_epi_epc_ferramentalRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class Estoque_epi_epc_ferramentalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'autorizado_por',
        'actualicao',
        'observacao',
        'incluidodoem',
        'id_operacao',
        'id_empregados',
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
        return Estoque_epi_epc_ferramental::class;
    }
}
