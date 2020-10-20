<?php

namespace App\Repositories;

use App\Models\pedido;
use App\Repositories\BaseRepository;

/**
 * Class pedidoRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:03 am UTC
*/

class pedidoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'idpedidocabecalho',
        'data_pedido',
        'idobrasestoque',
        'pedido_encaminhado',
        'pedido_encaminhado_data',
        'pedido_encaminhado_observacao',
        'pedido_fechado',
        'pedido_fechado_data',
        'pedido_fechado_observacao',
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
        return pedido::class;
    }
}
