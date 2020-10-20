<?php

namespace App\Repositories;

use App\Models\Contrato_itens;
use App\Repositories\BaseRepository;

/**
 * Class Contrato_itensRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class Contrato_itensRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'item',
        'contrato_itens_descricao',
        'valor_mao_obra',
        'valor_material',
        'aplicacao',
        'bloqueio_material',
        'valor_mao_obra_anterior',
        'valor_material_anterior',
        'fatork',
        'fatork_operacao',
        'tempo_garantia',
        'tempo_garantia_periodo',
        'codigo_produto',
        'incluidodoem',
        'id_contrato',
        'id_unidade',
        'id_marca_produto',
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
        return Contrato_itens::class;
    }
}
