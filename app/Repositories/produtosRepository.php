<?php

namespace App\Repositories;

use App\Models\produtos;
use App\Repositories\BaseRepository;

/**
 * Class produtosRepository
 * @package App\Repositories
 * @version May 24, 2020, 8:59 am UTC
*/

class produtosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'produtos_descricao',
        'idmarca',
        'idunidade',
        'quantidade_atual',
        'quantidade_minima',
        'valor_unitario',
        'idfornecedor',
        'idfabricante',
        'local',
        'idaplicacao',
        'excluido',
        'incluidoem',
        'idusuario',
        'codigo_itens_contrato',
        'atualizacao_manual',
        'atualizacao_manual_idusuario'
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
        return produtos::class;
    }
}
