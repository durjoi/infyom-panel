<?php

namespace App\Repositories;

use App\Models\Estoque_entradas;
use App\Repositories\BaseRepository;

/**
 * Class Estoque_entradasRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:01 am UTC
*/

class Estoque_entradasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'data_operacao',
        'numero_nf',
        'numero_rm',
        'observacao',
        'incluidodoem',
        'id_operacao',
        'id_fornecedor',
        'id_obras_estoque',
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
        return Estoque_entradas::class;
    }
}
