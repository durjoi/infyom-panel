<?php

namespace App\Repositories;

use App\Models\solicitacao_material;
use App\Repositories\BaseRepository;

/**
 * Class solicitacao_materialRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:01 am UTC
*/

class solicitacao_materialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'idsolicitacaoreclamacao',
        'idcontratoitens',
        'mo_quantidade',
        'mo_origem',
        'mt_quantidade',
        'mt_origem',
        'incluidoem',
        'idusuario',
        'item_com_vandalismo',
        'sucata_nao_retornada',
        'garantia'
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
        return solicitacao_material::class;
    }
}
