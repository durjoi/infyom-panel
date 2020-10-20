<?php

namespace App\Repositories;

use App\Models\pedido_cabecalho;
use App\Repositories\BaseRepository;

/**
 * Class pedido_cabecalhoRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:03 am UTC
*/

class pedido_cabecalhoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'centro_custo',
        'almoxarifado',
        'telefone_fixo',
        'telefone_celular',
        'cnpj',
        'inscricao_estadual',
        'gerente_geral',
        'encarregado_eletrica',
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
        return pedido_cabecalho::class;
    }
}
