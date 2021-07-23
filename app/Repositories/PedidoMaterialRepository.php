<?php

namespace App\Repositories;

use App\Models\PedidoMaterial;
use App\Repositories\BaseRepository;

/**
 * Class PedidoMaterialRepository
 * @package App\Repositories
 * @version June 10, 2020, 8:42 pm UTC
*/

class PedidoMaterialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'aplicacao_obra',
        'engenheiro_eletricista',
        'data',
        'numero',
        'centro_de_custo',
        'almoxarifado',
        'telefone',
        'celular',
        'cnpj',
        'inscricao_estadual',
        'solicitante',
        'icms',
        'juros_mes',
        'email',
        'endereco_entrega',
        'bairro_entrega',
        'cep_entrega',
        'cnpj_entrega',
        'cidade_entrega',
        'telefone_contato'
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
        return PedidoMaterial::class;
    }
}
