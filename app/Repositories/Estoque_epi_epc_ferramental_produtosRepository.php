<?php

namespace App\Repositories;

use App\Models\Estoque_epi_epc_ferramental_produtos;
use App\Repositories\BaseRepository;

/**
 * Class Estoque_epi_epc_ferramental_produtosRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class Estoque_epi_epc_ferramental_produtosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'quantidade',
        'valor_unitario',
        'incluidodoem',
        'id_estoque_epi_epc_ferramental',
        'id_produtos',
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
        return Estoque_epi_epc_ferramental_produtos::class;
    }
}
