<?php

namespace App\Repositories;

use App\Models\solicitacao_material_itens;
use App\Repositories\BaseRepository;

/**
 * Class solicitacao_material_itensRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class solicitacao_material_itensRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'idcontratoitens',
        'mo_quantidade',
        'mo_origem',
        'mt_quantidade',
        'mt_origem',
        'idusuario',
        'item_com_vandalismo',
        'sucata_nao_retornada'
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
        return solicitacao_material_itens::class;
    }
}
