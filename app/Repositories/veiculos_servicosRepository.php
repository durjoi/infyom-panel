<?php

namespace App\Repositories;

use App\Models\veiculos_servicos;
use App\Repositories\BaseRepository;

/**
 * Class veiculos_servicosRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:03 am UTC
*/

class veiculos_servicosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'idveiculos',
        'data_servico',
        'descricao_servico',
        'valor_total',
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
        return veiculos_servicos::class;
    }
}
