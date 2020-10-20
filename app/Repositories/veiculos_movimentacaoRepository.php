<?php

namespace App\Repositories;

use App\Models\veiculos_movimentacao;
use App\Repositories\BaseRepository;

/**
 * Class veiculos_movimentacaoRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:03 am UTC
*/

class veiculos_movimentacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'idveiculos',
        'saida',
        'retorno',
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
        return veiculos_movimentacao::class;
    }
}
