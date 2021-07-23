<?php

namespace App\Repositories;

use App\Models\PedidoMaterialItem;
use App\Repositories\BaseRepository;

/**
 * Class PedidoMaterialItemRepository
 * @package App\Repositories
 * @version June 10, 2020, 8:32 pm UTC
*/

class PedidoMaterialItemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descricao',
        'unidade',
        'saldo_estoque',
        'quantidade_solicitada',
        'preco_anterior',
        'total',
        'observacoes',
        'pedido_material_id'
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
        return PedidoMaterialItem::class;
    }
}
