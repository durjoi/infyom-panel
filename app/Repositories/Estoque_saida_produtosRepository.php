<?php

namespace App\Repositories;

use App\Models\Estoque_saida_produtos;
use App\Repositories\BaseRepository;

/**
 * Class Estoque_saida_produtosRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class Estoque_saida_produtosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'quantidade',
        'valor_unitario',
        'incluidodoem',
        'id_saida',
        'id_productos',
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
        return Estoque_saida_produtos::class;
    }
}
