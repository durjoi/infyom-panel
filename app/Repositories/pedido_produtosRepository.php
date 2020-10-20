<?php

namespace App\Repositories;

use App\Models\pedido_produtos;
use App\Repositories\BaseRepository;

/**
 * Class pedido_produtosRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:03 am UTC
*/

class pedido_produtosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'idpedido',
        'idprodutos',
        'qtd_solicitada',
        'qtd_recebida',
        'observacoes',
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
        return pedido_produtos::class;
    }
}
