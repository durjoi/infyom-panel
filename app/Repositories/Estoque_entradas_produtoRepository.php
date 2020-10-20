<?php

namespace App\Repositories;

use App\Models\Estoque_entradas_produto;
use App\Repositories\BaseRepository;

/**
 * Class Estoque_entradas_produtoRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:01 am UTC
*/

class Estoque_entradas_produtoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'quantidade',
        'dev_mat_novo_def',
        'dev_mat_n_apl',
        'dev_mat_apl',
        'valor_unitario',
        'valor_total',
        'incluidodoem',
        'id_entrada',
        'id_producto',
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
        return Estoque_entradas_produto::class;
    }
}
